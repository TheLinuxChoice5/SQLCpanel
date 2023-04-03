<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
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