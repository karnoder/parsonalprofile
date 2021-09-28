<?php 
	include_once 'session.php';
	require_once 'inc/database.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$user_id = $_SESSION["user_id"];

		$old_password = $_POST["old_password"];
		$new_password = $_POST["new_password"];
		$cnew_password = $_POST["cnew_password"];

		// Keep Data
		$_SESSION["old_passwordvalue"] = $old_password;
		$_SESSION["new_passwordvalue"] = $new_password;
		$_SESSION["cnew_passwordvalue"] = $cnew_password;

		$select = "SELECT * FROM users WHERE id = '$user_id'";
		$sq = mysqli_query($db, $select);
		$assoc = mysqli_fetch_assoc($sq);
		$hash = $assoc["password"];

		//Password Validation
		$number = !preg_match(" /[0-9]/ ", $new_password);
		$spacialCharacters = !preg_match(" /[\'^�$%&*()}{@#~?><>,|=_+�-]/ ", $new_password);
		$lowecase = !preg_match(" /[a-z]/ ", $new_password);
		$upercase = !preg_match("@[A-Z]@", $new_password);


		if (!$old_password == password_verify($old_password, $hash)) {
			$_SESSION["change_password"] = "active";
			$_SESSION["old_password"] = "Password Not Match";
			header("Location:profile.php");
		}
		elseif (empty($new_password) || strlen($new_password) < 7 || $number || $spacialCharacters || $lowecase || $upercase) {
			$_SESSION["change_password"] = "active";
			$_SESSION["new_password"] = "Please choose Strong Password";
			header("Location:profile.php");
		}
		elseif ($cnew_password != $new_password) {
			$_SESSION["change_password"] = "active";
			$_SESSION["cnew_password"] = "Password Not Match"; 
			header("Location:profile.php");
		}
		else{
			$nphash = password_hash($new_password, PASSWORD_DEFAULT);
			$pupdate = "UPDATE users SET  password = '$nphash' WHERE id = '$user_id' ";
			$uq = mysqli_query($db, $pupdate);
			session_unset();
			header("Location:../index.php");
		}

	}
	else {
		header("Location:../index.php");

	}
	
 ?>
