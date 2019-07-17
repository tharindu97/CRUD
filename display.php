<?php include "_dis.php"; ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="post">
 		<div class="form-group">
			<label>Enter the Student Number: <?php echo $id; ?></label>
		</div>
		<div class="form-group">
			<label>Enter the Name: <?php echo $sname; ?> </label>	
		</div>
		<div class="form-group">
			<table border=1>
				<thead>
					<tr>
						<th>Subject</th>
						<th>Marks</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$query = "SELECT * FROM marks WHERE Sid = '$id'";
			            $read_result = mysqli_query($con,$query);
			    
			                
			            while($row = mysqli_fetch_assoc($read_result)){
			                         $Scode = $row['Scode'];
			                         $marks = $row['marks'];
			                         echo "<tr>";
			                         echo "<td>{$Scode}</td>";
			                         echo "<td>{$marks}</td>";
			                         echo "</tr>";
			                }
						
					 ?>
				</tbody>
			</table>
		</div>
 	</form>
 </body>
 </html>