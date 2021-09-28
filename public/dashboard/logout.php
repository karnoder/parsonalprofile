<?php 
	include_once 'inc/session.php';
	$user_id = $_GET["user_id"];

	if ($_SERVER["REQUEST_METHOD"] == "GET"){
		session_destroy();
		header("location:../index.php");
	}
	else{
		header("Location:../index.php");
	}

 ?>