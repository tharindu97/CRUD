<?php require("./db.php"); ?>
<?php 
	if(isset($_POST["submit"])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];

		$query = "INSERT INTO users(name, email, address, contact) VALUES('$name','$email','$address','$password')";
		$result = mysqli_query($con, $query);
		if(!$result){
			echo "Not Succefully!";
		}
		return header("Location:login.php");
	}
 ?>