<?php
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

if($_GET['M'] == 'user') {
	switch ($_GET['P']) {
		case 'login': require_once PROTECTED_DIR.'user/login.php'; break;
		case 'register': require_once PROTECTED_DIR.'user/register.php'; break;
		default: require_once PROTECTED_DIR.'normal/404.php'; break;
	}


?>