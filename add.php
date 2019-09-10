<?php
include('config.php');

$sql = "INSERT INTO article(Name, Article, IMG, Block1, Block2, Block3, Date) VALUES ('".$_POST["Name"]."', '".$_POST["Article"]."', '".$_POST["IMG"]."', '".$_POST["Block1"]."', '".$_POST["Block2"]."', '".$_POST["Block3"]."', '".$_POST["Date"]."')";

if ($conn->query($sql) === TRUE) {
	echo "Success";
}else{
	echo "Error: ".$sql."<br>" . $conn->error;
}

mysqli_close($conn);

header('Location: index.php');
?>