<?php

function registrationValidation() {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$error = [];

	// name validation
	if (strlen($name) < 5 or str_word_count($name) < 2) {
		$error['name'] = 'Name must be minimum 5 characters and 2 words.';
	}
	// email validation
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error['email'] = 'Email must be valid.';
	}
	// phone validation
	if (strlen($phone) != 11) {
		$error['phone'] = 'Phone must be valid';
	}
	// password validation
	if (strlen($password) < 4 or strlen($password) > 30) {
		$error['password'] = 'Password must be 4-30 characters.';
	}else {
		if ($password != $confirmPassword) {
			$error['password'] = 'Password & Confirm Password does not match.';
		}
	}

	if (count($error) > 0) {
		$action = [
			'status' => 'error',
			'message'=> $error
		];
		return $action;
	}else {
		/////  Database Connect ///////
		require_once('dbConnect.php');
		$connect = dbConnect();
		
		/* echo '<pre>';
		print_r($connect);
		echo '</pre>'; */
		
		$sql = "INSERT INTO users(name, email, phone, password) VALUES('$name', '$email', '$phone', '$password')";
		$result = mysqli_query($connect, $sql);
		
		if (mysqli_error($connect)) {
			die('Table Error'.mysqli_error($connect));
		}else {
			print_r($result);
		}
		
		$action = [
			'status' => 'success',
			'message'=> 'Registration Completed Successfully'
		];
		// print_r($action);
		// return $action;
	}

}

?>