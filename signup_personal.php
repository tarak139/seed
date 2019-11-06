<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="attachments/icon.jpg" />
    <title> Project STEM </title>
	<link rel="stylesheet" type="" href="loginstyle.css">
   </head>
   <body class="bg">
        <div class="container">
          <div class="login">
            <h1>signup</h1><br/>
            <form method="post" action="#" onsubmit="return validateForm()">
                      <p><input type="text" name="fname" value="" placeholder="First Name" required></p>
                      <p><input type="text" name="mname" value="" placeholder="Middle Name" required></p>
                      <p><input type="text" name="lname" value="" placeholder="Last Name" required></p>
                      <p><input type="tel" title="Enter 10 digit mobile number without any special characters" pattern="[0-9]{10}" name="pnum" value="" placeholder="Personal Mobile Number" required></p>
                      <p><input type="text" name="faname" value="" placeholder="Father Name" required></p>
                      <p><input type="email" name="faemail" value="" placeholder="Father Email" required></p>
                      <p><input type="tel" title="Enter 10 digit mobile number without any special characters" pattern="[0-9]{10}" name="famnum" value="" placeholder="Father Mobile Number" required></p>
                      <p><input type="text" name="moname" value="" placeholder="Mother Name" required></p>
                      <p><input type="email" name="moemail" value="" placeholder="Mother Email" required></p>
                      <p><input type="text" title="Enter 10 digit mobile number without any special characters" pattern="[0-9]{10}" name="momnum" value="" placeholder="Mother Mobile Number" required></p>
                      <p class="submit"><input type="submit" name="commit" value="Click to Register"></p>
                      <p class="submit"><input type="reset"  value="Reset"></p>
            </form>
          </div>  
        </div>
   </body>
   <script>
      function validateForm(){
          var x = document.forms["signuppw"]["fname"].value;
          var y = document.forms["signuppw"]["mname"].value;
          var z = document.forms["signuppw"]["lname"].value;
          var p = document.forms["signuppw"]["pnum"].value;
          var q = document.forms["signuppw"]["faname"].value;
          var r = document.forms["signuppw"]["faemail"].value;
          var s = document.forms["signuppw"]["famnum"].value;
          var t = document.forms["signuppw"]["moname"].value;
          var u = document.forms["signuppw"]["moemail"].value;
          var v = document.forms["signuppw"]["momnum"].value;
          if (x == "") || (y == "")|| (z == "") ||(q == "") ||(t == "") 
          {
              alert("All the Names must be filled out");
              return false;
           }
           else if (p == "") || (s == "") ||(v == "")
           {
              alert("Mobile number fields must be filled out");
              return false;
           }
           else if (r == "") || (u == "") {
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
#$sql="select * from student_credentials where user_id='".$uid."'AND pwd='".$pwd."' limit 1";

$sql1= "SELECT user_id FROM student_personal WHERE user_id='" .$usid. "' limit 1";
$result1 = mysqli_query($conn, $sql1);
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result1)==1)
{
   echo " Hi $usid Your Data has been already in the database";
   header("Location: student_display.php");
}
else 
{
   if(mysqli_num_rows($result)==0)
   {
      if(isset($_POST['fname']))
      {
          $fname=$_POST['fname'];
          $mname=$_POST['mname'];
          $lname=$_POST['lname'];
          $pnum=$_POST['pnum'];
          $faname=$_POST['faname'];
          $faemail=$_POST['faemail'];
          $famnum=$_POST['famnum'];
          $moname=$_POST['moname'];
          $moemail=$_POST['moemail'];
          $momnum=$_POST['momnum'];
      
          #$sql = "SELECT `pname`, `lname`, `ymail`, `pwd` FROM `student_credentials` where pname<>'elmer'"
          
          #if 
          $sql="INSERT INTO `student_personal` (`fname`, `mname`, `lname`, `pnum`, `faname`, `faemail`, `famnum`, `moname`, `moemail`, `momnum`) VALUES ('".$fname."', '".$mname."', '".$lname."', '".$pnum."', '".$faname."', '".$faemail."', '".$famnum."', '".$moname."', '".$moemail."', '".$momnum."')";
          
          $result = mysqli_query($conn, $sql);
          
         if($result)
         {
            echo "Your data has been Succesfully entered into database";
            exit();
          }
              
      }
   }
   
}

?>