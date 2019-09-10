<!DOCTYPE html>
<head>
<meta name = "keywords" content = "Blog Keywords">
<meta name = "description" content = "Blog">
<meta name = "author" content= "George Chkhikvadze">
<meta name = "viewport" content = "width=device-width, initial-scale =1.0">
<link rel = "stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id ="main-content">
<center><div id ="title">
				<center><h1>GIO</h1></center>
				<center><a href = "index.php">Back</a></center>
			</div></center>	
<div id="section1">
<center>
<div id="box">
<?php
include('config.php');

$id = $_GET["id"];

$sql = "SELECT Name, Article, IMG,Block1, Block2, Block3, Date FROM article WHERE ID = '".$id."'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo"<div id = 'story'>";
		echo "<h2>".$row["Name"]."</h1>";
		echo "<p>".$row["Article"]."</p>";
		echo "<p>".$row["Date"]."</p>";
		echo "<img src = 'assets/".$row["IMG"]."'></img>";
		echo "<p>".$row["Block1"]."</p>";
		echo "<p>".$row["Block2"]."</p>";
		echo "<p>".$row["Block3"]."</p>";
		echo "<br><br><br><br></div>";
	}
} else{
	echo "no results";
}
mysqli_close($conn);
?>
</div>
</center>
</div>
</div>
<div id = "footer">
				<center>
					<a href ="Privacy.html">Privacy</a>
					<a href ="FAQ.html">FAQ</a>
					<br>
				<p>&copy; GIO 2019 | All rights reserved <p>
				</center>
				</div>
</body>
</html>
