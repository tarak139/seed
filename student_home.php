<?php
		
$servername="mysql-iuhealth.indianaphysiology.org";
$username="user2019";
$password="password01";
$db="iuhealth";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
        }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Project STEM</title>
	<link rel="icon" type="image/jpg" href="attachments/icon.jpg" />
	<link rel="stylesheet" type="" href="loginstyle.css">
</head>
	
  <body class="bg"> 
		
    <style>
    @media screen and (min-width: 400px){
        body{
            background-color:   rgb(238, 241, 239);
        }
    }
    </style>
  
	<div class="container">
		<div class="login">
			<h1>Login</h1><br/>
			<form method="post" action="#">
				<p><a href="mentorlabinfo.php">Mentor lab Information</p>
                <p><a href="signup_personal.php">Personal Details</p>
                
				<p><a class="signup" href="index.php">Home Page</a></p>
			</form>
		</div>  
 
		<!--<div class="login-help">
            <p>Forgot your password? <a href="signup.php">Click here to reset it</a>.</p>
		</div>-->
	</div>
</body>
</html>
