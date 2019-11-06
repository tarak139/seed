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
session_start();
$usid=$_SESSION['login_user'];
unset($_SESSION['login_user']);
echo " Hi $usid Your Data has been already in the database";
if(isset($_POST['commit']))
{
    #session_destroy();
    header("Location: index.php");
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
			<h1>Display</h1><br/>
                <p style="font-size:17px" class="w3-container w3-hover-grey" ><a href="student_home.php"><font color="White">Home Page</font></p>
                <p style="font-size:17px" class="w3-container w3-hover-grey"><a href="index.php"><font color="white">Login page</font></p>
                <p style="font-size:17px" class="w3-container w3-hover-grey submit"><a href="index.php"><font color="white">Logout</font></p>
        </div>  
    </div>
</body>
</html>