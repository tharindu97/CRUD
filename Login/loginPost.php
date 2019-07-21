<?php require("./db.php");
session_start(); 
?>
<?php 
	
	if(isset($_POST["submit"])){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$query = "SELECT * FROM users WHERE email='$email' AND contact=$password";
		$result = mysqli_query($con, $query);

		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $row['id'];
			header('Location: welcome.php');
		}else{
			echo "erro";
			header('Location: login.php');
		}
	}
	
 ?>