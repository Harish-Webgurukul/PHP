<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<style type="text/css">
			body{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h2>Login Form</h2>
		<form action="check.php" method="post">
			<p> Email : <input type="email" name="email"></p>
			<p> Password: <input type="password" name="password"></p>
			<input type="submit" value="Login">
		</form>
	</body>
</html>