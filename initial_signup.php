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
		
if(isset($_POST['userid']))
{
    $uid=$_POST['userid'];
    $otp=$_POST['otp'];
    
    $sql="select * from otp_details where user_id='".$uid."'AND otp='".$otp."' limit 1";
    $sql1= "select * from student_credentials where user_id='".$uid."' limit 1";
	$result=mysqli_query($conn, $sql);
	$result1=mysqli_query($conn, $sql1);
    
	if(mysqli_num_rows($result)==1)
	{
		if(mysqli_num_rows($result1)==1)
		{
			header("Location: mentorlabinfo.php");
		}
		else
		{
			header("Location: signup.php");
		}
		
    }
	else
	{
		echo '<script type="text/javascript"> ';

		echo 'alert("All the Names must be filled out")';
		
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
				<p><input type="password" name="otp" value="" placeholder="Enter One time Password" required ></p>
				<p class="remember_me">
					<label>
						<label>
							<input type="checkbox" name="remember_me" id="remember_me">
							Remember me on this computer
						</label>
					</label>
				</p>
				<p class="submit"><input type="submit" name="commit" value="Login"></p>
				<a class="signup" href="gen_otp.php">Don't have otp?</a>
			</form>
		</div>  
 
		<!--<div class="login-help">
            <p>Forgot your password? <a href="signup.php">Click here to reset it</a>.</p>
		</div>-->
	</div>
</body>
</html>
