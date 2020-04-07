<?php
function UserLogin($email, $password) {
	$query = "SELECT uid, firstname, lastname, email FROM users WHERE email = :email AND password = :password";
	$params = [
		':email' => $email,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['uid'];
		$_SESSION['fname'] = $record['firstname'];
		$_SESSION['lname'] = $record['lastname'];
		$_SESSION['email'] = $record['email'];

		header('Location: index.php');
	}
	return false;
}

function UserLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php');
}


?>