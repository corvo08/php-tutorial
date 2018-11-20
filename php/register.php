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
<?php include_once "dbinfo.php"; //mysql info

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$bool = true;

	$query = mysqli_query($link, "select * from users"); //query user table
	while($row = mysqli_fetch_array($query)) { //display all rows from query
		$table_users = $row['username'];
		if($username == $table_users) { //checks if there are any matching fields
			$bool = false; //set bool to false
			Print '<script>alert("Username has been taken!");</script>'; //promts the user
			Print '<script>window.location.assign("register.php");</script>'; //redirects to register.php
		}
	}

	if($bool){ //checks if bool is true
		mysqli_query($link, "insert into users (username, password) values ('$username','$password')"); //inserts the value to users table
		Print '<script>alert("Successfully Registered!");</script>'; //promt the user success
		Print '<script>window.location.assign("register.php");</script>';
	}

	}
?>