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

$submission = $_POST["submitUser"];
$e = $_POST["user"];
$f = $_POST["pass"];

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
	
	$cust = "INSERT INTO user (username,password) VALUES ('$e','$f')";
	
	mysql_query($cust,$con);

	echo "inserted";
		
}

$username = mysql_query("SELECT username FROM user WHERE username='$e'");
$password = mysql_query("SELECT username FROM user WHERE username='$f'");

			$action = '';
			if(!$username && $password) {
				$action = "signin.php";
			} else {
				$action = "rental.html";
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
               
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
        </div>
    </nav>

    <div class="container">

       
        <header class="jumbotron space-out">
            <h1>Online Virtual Agent</h1>
            <p>Please Sign In.</p>
    
			
					<form action="<?php echo $action; ?>" method="post" name="signupform" onsubmit="javascript:validateForm(event)">
					<div class="align">
					<p class="alert_msg" id="alert1">Enter Username</p>
					<label>Username</label> <input type="text" id="num1" name="user1"><br/>
					<p class="alert_msg" id="alert2">Enter Password</p>
					<label>Password</label> <input type="password" id="num2" name="pass1"><br/>
					<input type="submit" name="submitUser1" >
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
