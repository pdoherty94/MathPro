<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
<?php

$username1="mydb2920dp";
$password="fe6caj";
$database="mydb2920";
$url = "danu6.it.nuigalway.ie";




// Create connection
$conn = new mysqli($url, $username1, $password, $database);
// Check connection

$sql = "Select Question from Questions where Q_ID = 1";

mysql_query($sql);

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		
                        echo $row["Question"]."<br>";
                        
	}
}


$sql = "Select Answer from Answers where Question_ID = 1";

mysql_query($sql);

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		
                        echo $row["Answer"]."<br>";
                        
	}
}
		mysql_close();

                ?>
        
<form action="checkAns.php" method="post">
Answer: <input type="text" name="answer"><br>
<input type="submit">
</form>
    </body>
</html>
