<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "blog";

$conn = new mysqli($servername, $user, $pass, $db);

if ($conn ->connect_error){
	die("connection failed ".$conn->connect_error);
};
?>