<?php
	include_once "dbinfo.php";
	session_start();
	$username = mysqli_escape_string($link, $_POST['username']);
	$password = mysqli_escape_string($link, $_POST['password']);
	$bool = true;

	$query = mysqli_query($link, "select * from users where username = '$username'"); //query users table
	$exists = mysqli_num_rows($query); //checks if usrname exists
	$table_users = "";
	$table_password = "";
	if ($exists > 0) { //if there are no returning rows or no existing username
		while($row = mysqli_fetch_assoc($query)) { //display all rows from query
			$table_users = $row['username']; //the first username row is passed on to $table_users until the query is done
			$table_password = $row['password']; //essentially same as username, but password table
		} 
		if(($username == $table_user) && ($password == $table_password)) { //checks for matching fields
			if ($password == $table_password) {
				$_SESSION['user'] = $username; //sets the username in this session. global variable.
				header("location:home.php"); //redirects user to the authenticated home page
			}
		}
		else {
			Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
        	Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}
	}
	else {
		Print '<script>alert("Incorrect username!");</script>'; // Prompts the user
        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
	}
	?>