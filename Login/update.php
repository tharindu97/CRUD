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
		$password = $row['contact'];
		
	}else{
		header('Location: login.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<form action="#" method="POST">
		<div class="from-group">
			<label>Name:</label><br>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="from-group">
			<label>Email:</label><br>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="from-group">
			<label>Address:</label><br>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="from-group">
			<label>Password:</label><br>
			<input type="text" name="password" value="<?php echo $password; ?>">
		</div><br>
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>

<?php 
	
	if(isset($_POST['update'])){
		$id = $_SESSION['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];

		$query = "UPDATE users SET name = '$name', email = '$email', address = '$address', contact = '$password' WHERE id = $id";
		$result = mysqli_query($con, $query);

		if($result){
			header("Location: welcome.php");
		}
	}

 ?>