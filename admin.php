<?php
   include('session.php');
?>
<html>
<body>
<center>
<form action="add.php" method="post">
Title: <input type="text" name="Name"><br>
Image: <input type="text" name="IMG"><br>
Date: <input type="text" name="Date"><br>
Article: <textarea cols = 100 rows = 10 name="Article"></textarea><br>
Block1: <textarea cols = 100 rows = 10 name="Block1"></textarea><br>
Block2: <textarea cols = 100 rows = 10 name="Block2"></textarea><br>
Block3: <textarea cols = 100 rows = 10 name="Block3"></textarea><br>
<input type="submit">
</form>
</center>
</body>
</html>