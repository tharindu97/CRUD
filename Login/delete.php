<?php 
require("./db.php"); 
session_start();
?>

<?php 

	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];

		$query = "DELETE FROM users WHERE id = $id";
		$result = mysqli_query($con, $query);
		if($result){
			header("Location: register.php");
		}
	}

 ?>