<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'website3');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());

if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
else {
	echo "Successfully connected to the database!";
}

function NewUser() {
	$username = $_POST['username'];
	$email = $_POST['email']
	$password  = $_POST['password']
	$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	$data = mysql_query($query) or die(mysql_error());
	if ($data) {
		echo "YOUR REGISTRATION IS COMPLETED";
	}
}

function Register() {
	if (!empty($_POST['username'])) {
		$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());
		if (!$row = mysql_fetch_array($query) or die(mysql_error())) {
			NewUser();
		}
		else {
			echo "SORRY, An account with this username already exists! Please go to LOGIN";
		}
	}
	if (isset($_POST['submit'])) {
		Register();
	}
}

?>