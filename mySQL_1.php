
<?php

$username1="mydb2920dp";
$password="fe6caj";
$database="mydb2920";
$url = "danu6.it.nuigalway.ie";



$username  = $_POST['username'];
$user_password  = $_POST['user_password'];
$name  = $_POST['name'];
$email  = $_POST['email'];


// Create connection
mysql_connect($url, $username1, $password);
// Check connection

@mysql_select_db($database) or die( "Unable to select database");



$sql = "INSERT INTO users (username,user_password,name,email) VALUES ('$username','$user_password','$name','$email')";

mysql_query($sql);

		mysql_close();
echo "You successfully created a new user";
                ?>

