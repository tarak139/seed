<?php
		
include ('connection.php');
#connect_db();
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
session_start();
				
if(isset($_POST['userid']))
{
	session_start();
	// Store Session Data
    $uid=$_POST['userid'];
    $pwd=$_POST['pwd'];
	$_SESSION['login_user']= $uid;

	$sql="select * from student_credentials where user_id='".$uid."'AND pwd='".$pwd."' limit 1";
	$result=mysqli_query($conn, $sql);
	#$result1=mysqli_query($conn, $sql1);
    
    
    $result=mysqli_query($conn, $sql);
    
	if(mysqli_num_rows($result)==1)
	{
		if($uid==300001){
			header("Location: student_coordinator.php");
		}
		else{
			header("Location: student_home.php");
		}
		
		
    }
	else
	{
		echo '<script type="text/javascript"> ';

		echo 'alert("Username or Password is incorrect")';
		
		echo "</script>";
    
    }
        
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Project STEM</title>
	<link rel="icon" type="image/jpg" href="attachments/icon.jpg" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
				<p><input type="tel" pattern="[0-9]{6}" name="userid" value="" placeholder="Userid" required></p>
				<p><input type="password" name="pwd" value="" placeholder="Enter  Password" required ></p>
				<p class="remember_me">
					<label>
						<label>
							<input type="checkbox" name="remember_me" id="remember_me">
							Remember me on this computer
						</label>
					</label>
				</p>
				<p class="submit"><input type="submit" name="commit" value="Login"></p>
				<a class="signup" href="initial_signup.php">Not Registered yet?</a>
			</form>
		</div>  
	
		<!--<div class="login-help">
            <p>Forgot your password? <a href="signup.php">Click here to reset it</a>.</p>
		</div>-->
	</div>
</body>
</html>
