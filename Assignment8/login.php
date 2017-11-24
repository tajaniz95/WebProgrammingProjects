login.php

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
/*		create table.php
CREATE TABLE `user`.`album` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` VARCHAR( 225 ) NOT NULL ,
`typeofalbum` VARCHAR( 225 ) NOT NULL ,
`material` VARCHAR( 225 ) NOT NULL ,
`price` INT( 11 ) NOT NULL ,
`trn_date` DATETIME NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS register.`users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`username` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`trn_date` datetime NOT NULL,
PRIMARY KEY (`id`)
);
CREATE TABLE `user`.`artist` (
`id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
`artistname` VARCHAR( 255 ) NOT NULL ,
`artistemail` VARCHAR( 255 ) NOT NULL ,
`artistphone` INT( 11 ) NOT NULL ,
`date` DATETIME NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = InnoDB;
*/
require('db.php');
session_start();
if (isset($_POST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($con,$username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows==1){
$_SESSION['username'] = $username;
header("Location: index.php"); // Redirect user to index.php
}else{
echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
}
}else{
?>
<div class="container">
<div class="header"><h1>Welcome to Our Site</h1></div>
<div class="form">
<h2>Log In Form </h2>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
<div class="footer"><h6>@copyrights- 2017</h6></div>
</div>
</body>
</html>