<?php 
require("./db.php"); 
session_start();
?>

<?php 
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
		$query = "SELECT * FROM users WHERE id = $id ";
		$result = mysqli_query($con, $query);

		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
		$email = $row['email'];
		$address = $row['address'];
		
	}else{
		header('Location: login.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form action="">
		<div class="from-group">
			<label>Name: <?php echo $name; ?></label>
		</div>
		<div class="from-group">
			<label>Email: <?php echo $email; ?></label>
		</div>
		<div class="from-group">
			<label>Address: <?php echo $address; ?></label>
		</div>
	</form>
	<a href="logout.php">Logout</a><br>
	<a href="update.php">Update</a><br>
	<a href="delete.php">Delete</a>
</body>
</html>