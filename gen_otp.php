<?php
#intiating conncetion to the database		
$servername="mysql-iuhealth.indianaphysiology.org";
$username="user2019";
$password="password01";
$db="iuhealth";
#here intiating the mailing variables
$to = "vemula.sailesh21@gmail.com";
$subject = "Signup OTP";
$headers[] = "From: elmer.sanders@gmail.com" . "\r\n" . "CC: srikrishna1995edu@gmail.com";
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
		
if(isset($_POST['userid']))#cheching if the post got any input or not
{
    $uid=$_POST['userid'];#getting the input and intiating it to a variable

	$sql="select * from otp_details where user_id='".$uid."' limit 1";
	$sql1= "select otp from otp_details where user_id='".$uid."' limit 1";
    
	$result=mysqli_query($conn, $sql);
	$result1=mysqli_query($conn, $sql1);
	$row1=mysqli_fetch_assoc($result);
	$row = mysqli_fetch_assoc($result1);
	
	#$body[] ="Hi, Below is the otp for intial signing up  ";
	#$body[] =  'Hi, Below is the otp for intial:'.$row['otp'];
	$body[]='<html>
	<head>
    </head>
    <body>
		<pre>Hi, '.$uid.'. Please find the otp below for the intial signing up
		
			'.$row['otp'].'</pre>
	</body>
	</html>';
	
	if(mysqli_num_rows($result)==1)	#checking if there is a single row that has the result
	{
		echo '<script type="text/javascript"> ';
		echo 'alert("wait for the organization to send you the otp")';
		echo "</script>";
		mail($to,$subject,implode("\r\n",$body),implode("\r\n", $headers));
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
				<p class="remember_me">
					<label>
						<label>
							<input type="checkbox" name="remember_me" id="remember_me">
							Remember me on this computer
						</label>
					</label>
				</p>
				<p class="submit"><input type="submit" name="commit" value="CLick to generate OTP"></p>
			</form>
		</div>
	</div>
</body>
</html>
