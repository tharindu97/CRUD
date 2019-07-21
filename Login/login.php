<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div class="body">
	<form action="loginPost.php" method="POST">
		<div class="from-group">
			<label>Email:</label><br>
			<input type="text" name="email" required>
		</div>
		<div class="from-group">
			<label>Password:</label><br>
			<input type="password" name="password" required>
		</div>
		<input type="submit" name="submit" value="Login">
	</form>
</div>
</body>
</html>