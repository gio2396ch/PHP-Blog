<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name = "language" content="english">
		<meta name = "author" content="George Chkhikvadze">
		<meta name = "description" content = ""> <!-- Fill out -->
		<meta name = "keywords" content = ""><!-- FIll out --> 
		<link rel = "stylesheet" type="text/css" href="style.css">
		<title>Home</title>
	</head>
	<body>
		<div id ="main-content">
			<center><div id ="title">
				<center><h1>GIO</h1></center>
				<center><a href = "#section1">Read</a></center>
			</div></center>	
			<div id="section1">
				<!--PHP HERE -->
				<center>
				<div id ="box">
				<table border = 0px width=100% height = auto>
				<?php
				include ('config.php');
				
				$sql = "SELECT ID, Name, Article, IMG From Article ORDER BY ID DESC";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)){
					echo "
					
					<tr><th><a href = 'article.php?id=".$row["ID"]."'>".$row["Name"]."</a></th>
					
					</tr>
					<tr><td><p onmouseover = 'opacitya(this)' onmouseout='opacityb(this)'>".$row["Article"]."</p></td>
					<td><img src = 'assets/".$row["IMG"]."'></img></td></tr>
					";
					}
				} else{
					echo "no Results";
				}
				mysqli_close($conn);
				?>
				<!-- end here-->
				</table>
				</div>
				</center>
				<br>
				<br>
				<br>
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
	<script>
		function opacitya(x){
			x.style.opacity = 1;
		}
		function opacityb(x){
			x.style.opacity =.5;
		}
		
	</script>

	</body>
</html>