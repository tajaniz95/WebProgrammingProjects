<?php
// to insert an image into the database table
//mysql> CREATE TABLE Images(Id INT PRIMARY KEY AUTO_INCREMENT, Data MEDIUMBLOB);

$host = "localhost"; 
$user = "user12"; 
$pass = "user12"; 
$db = "mydb"; 

$r = mysql_connect($host, $user, $pass);

if (!$r) {
    echo "Could not connect to server\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established\n"; 
}

$r2 = mysql_select_db($db);

if (!$r2) {
    echo "Cannot select database\n";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Database selected\n";
}

$file = "woman.jpg";

$img = fopen($file, 'r');

if (!$img) {
    echo "Cannot open file for writing\n";
    trigger_error("Cannot open file for writing\n", E_USER_ERROR);
} 

$data = fread($img, filesize($file));

if (!$data) {
    echo "Cannot read image data\n";
    trigger_error("Cannot read image data\n", E_USER_ERROR);
}

$es_data = mysql_real_escape_string($data);
fclose($img);

$query = "INSERT INTO Images(Id, Data) Values(1, '$es_data')";
    
$rs = mysql_query($query);

if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysql_error(), E_USER_ERROR); 
} else {
    echo "Query successfully executed\n";
} 

mysql_close();

?>