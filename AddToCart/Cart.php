<?php 
	session_start();
	$database_name ="Product_details";
	$con = mysqli_connect(host:"localhost",user:"root",password:"",$database_name);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container" style="width: :65%">
		<h2>Shopping Cart</h2>
		<?php 
			$query = "SELECT *FROM product ORDER BY id Asc";
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_arry($result)) {
		
				}

			}
		 ?>

		 <div class="col-md-3">
		 	
		 </div>
	</div>
</body>
</html>