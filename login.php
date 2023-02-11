<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	
	<form action="panel.php" method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="Submit">
	</form>
	
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			header('Location: panel.php');
		}
	?>
</body>
</html>