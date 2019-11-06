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

$sql="SELECT  * FROM `student_personal` where `user_id`<>'300001'";
$result=mysqli_query($conn, $sql);
header('Content-Type: application/x-excel');
header('Content-Disposition: attachment; filename="student_personal_details.csv"');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
$output = fopen("php://output", "w");  
fputcsv($output, array('User ID','First Name','Middle Name','Last Name','Personal Contact','Father Name','Father Mail','Father Contact','Mother Name','Mother Mail','Mother Contact'));  
while($row = mysqli_fetch_assoc($result))  
    {  
        fputcsv($output, $row);  
    }  
fclose($output);  
#`user_id`, `fname`, `mname`,`lname`,`pnum`,`faname`,`faemail`,`famnum`,`moname`,`moemail`,`momnum`,
#$headers=array('Preferred First Name','Last Name','Email Id','Password');

#echo(implode(',',$headers));
#echo("\n");
#while ($row = mysql_fetch_assoc($result)) 
#{
 #   $row_1= array($row['pname'],$row['lname'],$row['ymail'],$row['pwd'] );
  #  echo(implode(',',$row_1));
   # echo("\n");
#}
?>
