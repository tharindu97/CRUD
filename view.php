<?php include "db.php" ?>
<?php 
	if(isset($_POST['submit'])){
		$snumber = $_POST['keyword'];

		$query = "SELECT * FROM student WHERE Sid = '$snumber'";
		$result = mysqli_query($con, $query);

		$count = mysqli_num_rows($result);

		if($count <= 0){
			return header("Location:add.php?id=$snumber");
		}else{
			
			return header("Location:display.php?id=$snumber");
		}

		
	}

	
 ?>