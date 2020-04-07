<?php
function UserRegister($firstName, $lastName, $email, $password, $address, $address2="", $city, $region, $postalCode, $isAdmin=0) {
	$query = "SELECT uid FROM users WHERE email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (firstName, lastName, email, password, address, address2, city, region, postalCode, isAdmin) VALUES (:firstName, :lastName, :email, :password, :address, :address2, :city, :region, :postalCode, :isAdmin)";
		$params = [
			':firstName' => $firstName,
			':lastName' => $lastName,
			':email' => $email,
			':password' => $password,
			':address' => $address,
			':address2' => $address2,
			':city' => $city,
			':region' => $region,
			':postalCode' => $postalCode,
			':isAdmin' => $isAdmin
		];

		if(executeDML($query, $params)) 
			header('Location: index.php?M=user&P=login');
	} 
	return false;
}

function UserLogin($email, $password) {
	$query = "SELECT id, first_name, last_name, email FROM users WHERE email = :email AND password = :password";
	$params = [
		':email' => $email,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['id'];
		$_SESSION['fname'] = $record['first_name'];
		$_SESSION['lname'] = $record['last_name'];
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