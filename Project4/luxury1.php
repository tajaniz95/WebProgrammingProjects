<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Luxury Cars</title>
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
	</style>   
</head>

<body>

<?php


	$mysql_host="localhost";
	$mysql_user="mterfie1";
	$mysql_password="mterfie1";

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

		$table1 = "CREATE TABLE rental (
		total int(10),
		fname varchar(20),
		mi varchar(20),
		lname varchar(20),
		cc varchar(20),
		exp varchar(20)
		)";


		$sql = mysql_query($table1,$con);


		if (!$sql){
			echo "Table1 not created successfully" . "<br/>";	
		}
		else{
			echo "Table1 created successfully" . "<br/>";	
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
                <a class="navbar-brand" href="#">Project 3</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link2</a>
                    </li>
                    <li>
                        <a href="#">Link3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">


        <hr>
        <div class="row">
            <div class="col-lg-12">
                <h3>AUDI Q7</h3>
            </div>
        </div>
        <div class="row text-center">
			
            <div class="col-md-3 col-sm-6 tiles">
                <div class="thumbnail">
                    <img src="images/luxury.jpg" alt="">
                    <div class="caption">
                        <h3>COMPACT</h3>
                        <p>Compact cars offer great gas mileage and the ease of driving and parking in high traffic areas.</p>
                        <p>
                    <form action="cart.php" method="post" name="infoform" onsubmit="javascript:validateForm(event)">
					<div class="align">
					<h3>Payment Information</h3>
					<br/>
					<p class="alert_msg" id="alert1">  Please Enter Total</p>
					<label>Total: $</label> <input type="number" id="num1" value="200.98" name="exp"><br/>
					<p class="alert_msg" id="alert2">  Please Enter FName</p>
					<label>FName:</label> <input type="text" id="num2"  name="fname"><br/>
					<p class="alert_msg" id="alert3">  Please Enter LName</p>
					<label>LName:</label> <input type="text" id="num3" name="mi"><br/>
					<p class="alert_msg" id="alert4">  Please Enter CCN</p>
					<label>CCN:</label> <input type="text" id="num4" name="lname"><br/>
					<p class="alert_msg" id="alert5">  Please Enter EXP Date</p>
					<label>EXP:</label> <input type="text" id="num5" name="cc"><br/>
					<input type="submit" name="submitValuesrental" >
					</div>
					</form> 
                        </p>
                    </div>
                </div>
							
            </div>

	
         
        
        </div>
		<script type="text/javascript">
		
	
		document.getElementById('alert1').style.visibility = "hidden";
		document.getElementById('alert2').style.visibility = "hidden";
		document.getElementById('alert3').style.visibility = "hidden";
		document.getElementById('alert4').style.visibility = "hidden";
		document.getElementById('alert5').style.visibility = "hidden";
		
		var myForm = document.infoform;	
		var bool = true;
		
		  function validateForm(evt){
		
			if (document.getElementById("num1").value == "" && document.getElementById("num2").value == "" && document.getElementById("num3").value == "" && document.getElementById("num4").value == "" && document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,FName,LName,CC,EXP" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
				
				bool = false;
				
			}
			
			else if (document.getElementById("num1").value == "" && document.getElementById("num2").value == "" && document.getElementById("num3").value == "" && document.getElementById("num4").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,FName,LName,CC" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
				
			}
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num3").value == "" &&  document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,LName,CC,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num2").value == "" &&  document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,FName,CC,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num2").value == "" &&  document.getElementById("num3").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,FName,LName,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num3").value == "" && document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,LName,CC,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			
			else if (document.getElementById("num1").value == "" && document.getElementById("num2").value == "" && document.getElementById("num3").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,FName,LName" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,CC,EXP" ); //Total,FName,LName,CC,EXP
			
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num3").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,LName,EXP" ); //Total,FName,LName,CC,EXP
			
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num3").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,LName,EXP" ); //Total,FName,LName,CC,EXP
			
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visibility";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visibility";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,CC,EXP" ); //Total,FName,LName,CC,EXP
			
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num2").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,FName,EXP" ); //Total,FName,LName,CC,EXP
			
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "" &&  document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,CC,EXP" ); //Total,FName,LName,CC,EXP
			
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num3").value == "" && document.getElementById("num4").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,LName,CC" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "hidden";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num3").value == "" &&  document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): LName,CC,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
				
				
			}
			else if (document.getElementById("num1").value == "" && document.getElementById("num3").value == "" ) //helllllo
			{
				alert( "You forgot to enter the following field(s): Total,LName" ); 
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";

				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			
			else if (document.getElementById("num1").value == "" && document.getElementById("num2").value == "" )
			{
				alert( "You forgot to enter the following field(s): Total,FName" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
				
			}
			
			else if (document.getElementById("num1").value == "" && document.getElementById("num4").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,CC" ); //1.Total,2.FName,3.LName,4.CC,5.EXP
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "hidden";

				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "" && document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): Total,EXP" ); //1.Total,2.FName,3.LName,4.CC,5.EXP
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";

				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num3").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,LName" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num4").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,CC" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "hidden";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num2").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): FName,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			
			else if (document.getElementById("num3").value == "" &&  document.getElementById("num4").value == "")
			{
				alert( "You forgot to enter the following field(s): LName,CC" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "hidden";
				
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num3").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): LName,EXP" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num4").value == "" &&  document.getElementById("num5").value == "")
			{
				alert( "You forgot to enter the following field(s): CC,EXP" ); //Total,FName,LName,CC,EXP
				
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "visible";
				
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num1").value == "")
			{
				alert( "You forgot to enter the following field(s): Total" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
				
			}
			else if (document.getElementById("num2").value == "" )
			{
				alert( "You forgot to enter the following field(s): FName" );
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num3").value == "" )
			{
				alert( "You forgot to enter the following field(s): LName" );
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "visible";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
			else if (document.getElementById("num4").value == "" )
			{
				alert( "You forgot to enter the following field(s): CC" );
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "visible";
				document.getElementById('alert5').style.visibility = "hidden";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}	
			else if (document.getElementById("num5").value == "" )
			{
				alert( "You forgot to enter the following field(s): EXP" );
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert4').style.visibility = "hidden";
				document.getElementById('alert5').style.visibility = "visible";
				
				if(evt.preventDefault) { 
					event.preventDefault(); 
				}    
				else if(evt.returnValue) { 
					evt.returnValue = false; 
				}    
				else { return false; 
				}
		
				bool = false;
			}
	
			
			else {
			
				alert( "Validation successful!" );
				
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
				document.getElementById('alert3').style.visibility = "hidden";
			
				
		
				 bool = true;

			}
			

		}  	
    </script>

        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Footer information</p>
                </div>
            </div>
        </footer>

    </div>
  
</body>

</html>
