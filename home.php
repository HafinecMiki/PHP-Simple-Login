<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Dashboard</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="index.php">Logout</a>
		
		<h2>Hello <?php echo $_SESSION['user']?>!</h2>
	</div>
</body>
</html>