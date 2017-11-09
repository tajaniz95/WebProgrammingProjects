<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			background-color:beige;
			padding-top: 70px;
		}

		.space-out {
			margin-top: 50px;
		}

		.tiles {
			margin-bottom: 30px;
			width: 100%;
		
		}

		footer {
			margin: 50px 0;
		}
		h3{
			text-align: center;
		}
		.align {
			display: inline-block;
			clear: left;
			width: 230px;
			text-align: right;
		}
		.alert_msg{
			color: red;
			text-decoration: underline;
			right: 60px;
	
	
		}
		img{
			width: 400px;
			height: 100px;
			
		}
		table { 
  width: 100%; 
  border-collapse: collapse; 


}

tr:nth-of-type(odd) { 
  background: #eee; 
}

th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
#table_container{
    margin-top:-258px;
    margin-left:300px;
}
#table_container2{
    margin-top:10px;
    margin-left:300px;
	
}

	</style>   
</head>

<body>
<?php


$mysql_host="localhost";
$mysql_user="mterfie1";
$mysql_password="mterfie1";

$submission = $_POST["submitValuesrental"];
$a = $_POST["total2"];
$e = $_POST["total"] * $a;
$f = $_POST["fname"];
$m = $_POST["mi"];
$l = $_POST["lname"];
$c = $_POST["cc"];
$r = $_POST["exp"];



$submission1 = $_POST["submitValuesflight"];
$e1 = $_POST["total1"];
$f1 = $_POST["fname1"];
$m1 = $_POST["mi1"];
$l1 = $_POST["lname1"];
$c1 = $_POST["cc1"];
$e1 = $_POST["exp1"];

$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);

if (!$con){
	die("Error: " . mysql_error());
}
echo "Mysql connection successful" . "<br/>";

$db = mysql_select_db("mterfie1",$con);

if (!$db){
	echo "Error: " . mysql_error();
}
else{
	echo "Database connection successful" . "<br/>";	
}

if (isset($submission)){
	
	$cust = "INSERT INTO rental (total,fname,mi,lname,cc,exp) VALUES ('$a','$f','$m','$l','$c','$e')";
	
	mysql_query($cust,$con);

	echo "inserted";
		
}

if (isset($submission1)){
	
	$cust1 = "INSERT INTO flight1 (total,fname,mi,lname,cc,exp) VALUES ('$e1','$f1','$m1','$l1','$c1','$e1')";
	
	mysql_query($cust1,$con);

	echo "inserted";
		
}

		





?>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                      <a class="navbar-brand" href="#">Project 4</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="rental.html">Rentals</a>
                    </li>
                    <li>
                        <a href="flight.html">Flights</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

      

        <hr>

 
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
        <div class="row text-center">
			
            <div class="col-md-3 col-sm-6 tiles">
                <div class="thumbnail">
				<h3>CONFIRMATION</h3>
				<p>Here is the payment confirmation for your flight purchace.</p>
				<img src="flightImages/airplane.jpg" alt="">
				<table>
	<thead>
	<tr>
		<th>Order Number</th>
		<th>Total</th>
		<th>First Name</th>
		<th>Last Name</th>

	</tr>
	</thead>
	<tbody>
	<?php
		$i = 0;
		$tb1 = "SELECT * FROM flight1";
		$result = mysql_query($tb1,$con);

		
				while($row = mysql_fetch_array($result)) : $i++; ?>
					
					
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row['exp']?></td>
						<td><?php echo $row['fname']?></td>
						<td><?php echo $row['mi']?></td>
					
						
					</tr>
					
					
				
			
				
			<?php endwhile ?>
	</tbody>		
</table>
                        <p>Here is the payment confirmation for your rental purchace.</p>
						<img src="images/compact.jpg" alt="">
    <table>
	<thead>
	<tr>
		<th>Order Number</th>
		<th>Total</th>
		<th>First Name</th>
		<th>Last Name</th>
		
		

	</tr>
	</thead>
	<tbody>
	<?php
		$i = 0;
		$tb2 = "SELECT * FROM rental";
		$result = mysql_query($tb2,$con);

		
				while($row = mysql_fetch_array($result)) : $i++; ?>
					
					
					<tr>
		
						<td><?php echo $i ?></td>
						<td><?php echo $row['exp']?></td>
						<td><?php echo $row['fname']?></td>
						<td><?php echo $row['lname']?></td>
					
					
					</tr>
					
					
				
			
				
			<?php endwhile ?>
	</tbody>		
</table>
</div>

				
			
            </div>

	
         
        
        </div>

   </div>
        <hr>
    

    </div>
  
</body>

</html>