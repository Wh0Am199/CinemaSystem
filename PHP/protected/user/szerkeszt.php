<?php
	require_once DATABASE_CONTROLLER;
	
	if(array_key_exists('uid', $_GET) && !empty($_GET['uid'])){
		$query = "SELECT uid, firstname, lastname, email, password FROM users WHERE uid=".$_GET['uid']."";
		$user = getRecord($query);
	}
 
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['changePassword'])) {
		
		$postData = [
			'oldpassword' => $_POST['oldpassword'],
			'newpassword' => $_POST['newpassword'],
			'confirmnewpassword' => $_POST['confirmnewpassword']
		];
			
		if(empty($postData['oldpassword']) || empty($postData['newpassword'])){
			echo "Hiányzó adatok!";
		} 
		else if($user['password'] != sha1($postData['oldpassword'])){
			echo "Régi jelszó nem egyezik!";
		}
		else if($postData['newpassword'] != $postData['confirmnewpassword']){
			echo "Az új jelszó és hitelesítési jelszó nem egyezik!";
		}
		else{
			$query = "UPDATE users SET password = :password WHERE uid=".$_GET['uid']."";
			$params = [
				':password' => sha1($postData['newpassword'])
			];
			if (!executeDML($query, $params)){
				echo "Hiba az adatok frissítése során!";
			} header ("Location: index.php?P=home");
		}
	}
	
	
?>
<form method="POST">
	<table class="users">
		<h1>Jelszó változtatás!</h1>		 
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-1 col-form-label">Régi jelszó</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" id="inputPassword3" placeholder="********" name="oldpassword" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-1 col-form-label">Új jelszó</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" id="inputPassword3" placeholder="********" name="newpassword" value="">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-1 col-form-label">Jelszó hitelesítés</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" id="inputPassword3" placeholder="********" name="confirmnewpassword" value="">
			</div>
		</div>			
		<button type="submit" class="btn btn-primary" name="changePassword">Jelszó változtatás</button>
	</table>
</form>