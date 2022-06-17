<?php
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `resepsionis` WHERE `username` = '$username' && `password` = '$password'") or die();
	$fetch = $query->fetch_array();
	$row = $query->num_rows;

	if ($row > 0) {
		session_start();
		$_SESSION['resepsionis_id'] = $fetch['resepsionis_id'];
		header('location:home.php');
	} else {
		echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
	}
}
