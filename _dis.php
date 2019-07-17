<?php include "db.php"; ?>
<?php 
 		if(!isset($_GET['id'])){
 			return header("Location:search.php?id=$sid");
 		}
 		$id = $_GET['id'];
 		$query = "SELECT * FROM student WHERE Sid = '$id'";
		$result = mysqli_query($con, $query);

		if(!$result){
        	die("Query FAIELD".mysqli_error());
    	}else{
        	while($row = mysqli_fetch_assoc($result)){
                $sname = $row['Sname'];
          	}
        }
 		
?>
