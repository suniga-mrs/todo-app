<?php 

$host = "db4free.net";
$username = "michelle";
$password = "DBtest1234";
$dbname = "todo_app_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection Failed ' . mysqli_error($conn) );
}

// echo "Connected Successfully";

?>