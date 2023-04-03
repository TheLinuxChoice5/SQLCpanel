<!DOCTYPE html>
<html>
<head>
	<title>Database Control Panel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
	<h1>Database Control Panel</h1>
	
	<?php
		$username = $_POST['username'];
		$password = $_POST['password'];

		  if (!($username == 'uname' && $password == 'pass')) {
			echo 'Login failed';
			header('Location: login.php');
			exit;
		}

		$servername = "localhost";
		$username = "root";
		$password = "database_password";
		$dbname = "mainDatabase";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, /*$password*/NULL, $dbname);
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		if (isset($_POST['delete_table'])) {
			$table_name = mysqli_real_escape_string($conn, $_POST['table_name']);
			
			$sql = "DROP TABLE $table_name";
			
			if (mysqli_query($conn, $sql)) {
				echo "Table $table_name deleted successfully";
			} else {
				echo "Error deleting table: " . mysqli_error($conn);
			}
		}
	?>
	
	<form action="" method="post">
		<input type="text" name="table_name" placeholder="Table name">
		<input type="submit" value="Delete Table" name="delete_table">
	</form>
		</td>
	</tr>
	<?php
	$sql = "SELECT id, instaID, publicIP, content FROM MyData";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	echo "<br>";
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. "<br>| UserAgent: " . $row["instaID"]. " <br>| PublicIP: " . $row["publicIP"]. "<br>| <b>Content: ".  $row["content"]. "</b><br><br>";
	  }
  } else {
	echo "0 results";
  }
  $conn->close();
	?>
</table>