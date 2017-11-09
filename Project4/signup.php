<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CAR RENTAL</title>
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
		header{
		
			background-image: url("images/mclaren.jpg");
			background-size: 1280px 700px;
			background-repeat: no-repeat;
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

		$table1 = "CREATE TABLE user (
		username varchar(20),
		password varchar(20)
		)";

		$sql = mysql_query($table1,$con);


		if (!$sql){
			echo "User table not created successfully" . "<br/>";	
		}
		else{
			echo "User table created successfully" . "<br/>";	
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
               
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
        </div>
    </nav>

    <div class="container">

       
        <header class="jumbotron space-out">
            <h1>Online Virtual Agent</h1>
            <p>Please Sign Up Here.</p>
            
			
					<form action="signin.php" method="post" name="signupform" onsubmit="javascript:validateForm(event)">
					<div class="align">
					<p class="alert_msg" id="alert1">Enter Username</p>
					<label>Username</label> <input type="text" id="num1" name="user"><br/>
					<p class="alert_msg" id="alert2">Enter Password</p>
					<label>Password</label> <input type="password" id="num2" name="pass"><br/>
					<input type="submit" name="submitUser" >
					</div>
					</form> 
        
		</header>
		<script type="text/javascript">
		
	
		document.getElementById('alert1').style.visibility = "hidden";
		document.getElementById('alert2').style.visibility = "hidden";
				
		var myForm = document.signup;	
		var bool = true;
		
		  function validateForm(evt){
		
			if (document.getElementById("num1").value == "" && document.getElementById("num2").value == "")
			{
				alert( "You forgot to enter the following field(s): Username, Password" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "visible";
				
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
				alert( "You forgot to enter the following field(s): Username" );
				document.getElementById('alert1').style.visibility = "visible";
				document.getElementById('alert2').style.visibility = "hidden";
				
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
			else if (document.getElementById("num2").value == "")
			{
				alert( "You forgot to enter the following field(s): Password" ); //Total,FName,LName,CC,EXP
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "visible";
		
				
				
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
			
				alert( "Registeration Successul: Please sign in." );
				
				document.getElementById('alert1').style.visibility = "hidden";
				document.getElementById('alert2').style.visibility = "hidden";
	
			
				
		
				 bool = true;

			}
			

		}  	
		
		
		
		</script>

        <hr>

 
			
		
        </div>
        <hr>
      

    </div>
  
</body>

</html>
