<!DOCTYPE html>
<html>
<head>
	<title>My First PHP Website</title>
</head>
<body>
	<h2>Registration Page</h2>
	<a href="index.php">Click here to go back </a><br /> <br />
	<form action="register.php" method="POST">
		Enter Username: <input type="text" name="username" required="required" /> <br />
		Enter Password: <input type="password" name="password" required="required" /> <br />
		<input type="submit" value="Register">
	</form>

</body>
</html>
<?php include_once "dbinfo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);

	echo "Username entered is: ". $username . "<br />";
	echo "Password entered is: ". $password;
	mysqli_close($link);
}
?>