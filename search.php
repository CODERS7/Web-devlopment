<html>
<head>
<title>registration form</title>
</head>
<body>
	<form action="config.php" method="POST" style="width:300px; background:orange;text-align:justify;">
		<fieldset>
			Username:
			<input type="text" name="username">
			<br><br>
			Password:
			<input type="text" name="password">
			<br><br>
			<center><input type="submit" value="Login"></center>
		</fieldset>
	</form>
	
	<center><div style="background:cyan; width:14%; ">
	<fieldset style="width:30%;">
		<legend>Registration Form</legend>
		<form action="connection1.php" method="POST">
			Name:
			<input type="text" name="name">
			<br>
			Email:
			<input type="text" name="email">
			<br>
			UserName:
			<input type="text" name="user">
			<br>
			password:
			<input type="text" name="pass">
			<br>
			Confirm Password:
			<input type="text" name="cpass">
			<br>
			<input type="submit" name="submit" value="Sign-up">
		</form>
	</fieldset>
	
	</div></center>

</body>
</html>