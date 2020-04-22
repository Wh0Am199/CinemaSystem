<?php
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	
	case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;
	case 'listaz': !IsUserLoggedIn(); require_once PROTECTED_DIR.'user/listaz.php'; break;	
	case 'szerkeszt': !IsUserLoggedIn() ; require_once PROTECTED_DIR.'user/szerkeszt.php'; break;
	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;
	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;
	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}
?>
