<?php

function connect_db(){
    $servername="localhost";
    $username="user2019";
    $password="password01";
    $db="iuhealth";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
        }
        else{
            echo 'connected';
        }
}

?>