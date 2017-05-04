<?php

$username="XXXXXXX";
$password="XXXXXXX";
$database="XXXXXXXX";
$url = "XXXXXXXXX";
// Create connection
$conn = new mysqli($url, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT DISTINCT username, user_password, name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
			echo $row["username"]."<br>";
                        
                        echo $row["user_password"]."<br>";
                        echo $row["name"]."<br>";
	}
	// echo $result->num_rows;
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
		$conn->close();
                

                ?>

