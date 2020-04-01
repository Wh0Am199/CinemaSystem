<?php

function UserRegister($email, $password, $isAdmin=0) {
	$query = "SELECT uid FROM users WHERE email = :email";
	$params = [ ':email' => $email ];

	require_once database.php;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (email, password, isAdmin) VALUES (:email, :password, :isAdmin)";
		$params = [
			':email' => $email,
			':password' => sha1($password),
			':isAdmin' => $isAdmin
		];

		if(executeDML($query, $params)) 
			header('Location: index.php');
	} 
	return false;
}

?>