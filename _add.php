<?php include "db.php"; ?>
<?php 
	if(isset($_POST['submit'])){

		$sid = $_POST['keyword1'];
		$sname = $_POST['keyword2'];

		$query = "INSERT INTO student(Sid,Sname) VALUES('{$sid}', '{$sname}')";
		$result = mysqli_query($con, $query);

		if($result){
			return header("Location:search.php?id=$sid");
		}
		else{
			echo "Erro!";
		}
	}
 ?>