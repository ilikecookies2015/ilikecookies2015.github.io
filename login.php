<?php

if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "admin" && $password == "mypassword")
	{
		echo "Well done, you have logged in successfully";
	} else {
		echo "Sorry, the login information was incorrect";
	}
}

?>