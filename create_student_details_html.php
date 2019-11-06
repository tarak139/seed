

<!DOCTYPE html>
<html>
<title>Project STEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    
        <div><h2>Student Credentials</h2>
        <p><a class="w3-button w3-circle w3-teal" href="create_student_details_csv.php">Download as CSV</a></p></div>
   

        
<?php
		
$servername="mysql-iuhealth.indianaphysiology.org";
$username="user2019";
$password="password01"; 
$db="iuhealth";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
        if ($conn->connect_error) 
        {
			die("Connection failed: " . $conn->connect_error);
		}
  
	$sql="select * from student_credentials";
	
	$result=mysqli_query($conn, $sql);
	 
	if(mysqli_num_rows($result)>0)
	{   
        echo "<table class='w3-table w3-striped'><tr><th>Pref First Name</th><th>Last Name</th><th>Email ID</th><th>Password</th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr><td>" . $row["pname"]."</td><td>".$row["lname"]."</td><td>".$row["ymail"]."</td><td>".$row["pwd"]."</td></tr>";
        }
		echo "</table";
		
    }
	
        

?> 
</body>
</html>