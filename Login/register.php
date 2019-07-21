<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<div class="from">
	<form action="registerPost.php" method="POST">
		<div class="from-group">
			<label>Name:</label><br>
			<input type="text" name="name" required>
		</div>
		<div class="from-group">
			<label>Email:</label><br>
			<input type="text" name="email" required>
		</div>
		<div class="from-group">
			<label>Address:</label><br>
			<input type="text" name="address" required>
		</div>
		<div class="from-group">
			<label>Password:</label><br>
			<input type="password" name="password" required>
		</div>
		<br>
		<input type="submit" name="submit" value="Register">
	</form>
</div>
</body>
</html>