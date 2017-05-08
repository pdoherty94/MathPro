<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

$username1="XXXXXXX";
$password="XXXXXXX";
$database="XXXXXXX";
$url = "XXXXXXX";



$answer  = $_POST['answer'];


// Create connection
$conn = new mysqli($url, $username1, $password, $database);


//WHERE trackID = '$trackID'"
$sql = "SELECT Response from Answers WHERE is_right_answer = 1 AND Question_ID = 1 AND Answer='$answer')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		
                        echo $row["Response"]."<br>";
                        
	}
}

		$conn->close();

                ?>
