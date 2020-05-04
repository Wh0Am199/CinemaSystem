<?php
	require_once DATABASE_CONTROLLER;
	
	if(array_key_exists('id', $_GET) && !empty($_GET['id'])){
		$query = "DELETE FROM reservations WHERE reservationid=".$_GET['id']."";
		
		if(!executeDML($query)){
			echo "Hiba a törlés során!";
		}
		else{
			echo "Sikeres törlés!";
			header ("Location: index.php?P=sajatfoglalas");
		}
	}


?>