<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Project STEM </title>
    <link rel="icon" type="image/jpg" href="attachments/icon.jpg" />
	<link rel="stylesheet" type="" href="loginstyle.css">
   </head>
   <body class="bg">
        <div class="container">
		<div class="login">
			<h1>signup</h1><br/>
			<form name="signuppw" action="#" onsubmit="return validateForm()" method="post" >
                <p style="color: rgb(228, 222, 222); font-size: 15px; font-style: inherit;font-family: 'Times New Roman', Times, serif" >What is your preferred first name?<input type="text" name="pname" value="" placeholder="Preferred First Name" ></p>
                <p style="color: rgb(228, 222, 222); font-size: 15px; font-style: inherit;font-family: 'Times New Roman', Times, serif" >What is your Last name?<input type="text" name="lname" value="" placeholder="Last Name" ></p>
                <p title="Note: It CANNOT be your school email" style="color: rgb(228, 222, 222); font-size: 15px; font-style: inherit;font-family: 'Times New Roman', Times, serif" >What is the email you want to as the usernae?<input type="email" name="ymail" value="" placeholder="Your Email Id" ></p>
                <p style="color: rgb(228, 222, 222); font-size: 15px; font-style: inherit;font-family: 'Times New Roman', Times, serif" >Please Enter your New Password here:<input type="password" name="pwd" value="" placeholder="Password" ></p>
                <p class="submit" ><input type="submit" name="commit" value="Next"></p>
				<p class="submit"><input type="reset"  value="Reset"></p>
			</form>
		</div>  
 
	</div>
   </body>
   <script>
       function validateForm(){
           var x = document.forms["signuppw"]["pname"].value;
           var y = document.forms["signuppw"]["lname"].value;
           var z = document.forms["signuppw"]["ymail"].value;
           var p = document.forms["signuppw"]["pwd"].value;
           if (x == "") {
               alert("Preferred Name must be filled out");
               return false;
            }
            else if (y == "") {
               alert("Last Name must be filled out");
               return false;
            }
            else if (z == "") {
               alert("Email must be filled out");
               return false;
            }
            else if (p == "") {
               alert("Password must be filled out");
               return false;
            }

        }   
   </script>
</html>
<?php
		
$servername="localhost";
$username="id11103248_user2019";
$password="password01";
$db="id11103248_iuhealth";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
if(isset($_POST['pname']))
{
    $pname=$_POST['pname'];
    $lname=$_POST['lname'];
    $ymail=$_POST['ymail'];
    $pwd=$_POST['pwd'];
    
    $sql="INSERT INTO `student_credentials` (`pname`, `lname`, `ymail`, `pwd`) VALUES ('".$pname."', '".$lname."', '".$ymail."', '".$pwd."')";
    
    $result=mysqli_query($conn, $sql);
    
	if($result)
	{
		header("location: signup_personal.php");
    
    }
        
}
?> 