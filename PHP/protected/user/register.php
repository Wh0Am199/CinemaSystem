<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$postData = [
		'firstName' => $_POST['firstName'],
		'lastName' => $_POST['lastName'],
		'email' => $_POST['email'],
		'emailConfirm' => $_POST['emailConfirm'],
		'password' => $_POST['password'],
		'passwordConfirm' => $_POST['passwordConfirm'],
		'address' => $_POST['address'],
		'address2' => $_POST['address2'],
		'city' => $_POST['city'],
		'region' => $_POST['region'],
		'postalCode' => $_POST['postalCode']
		
	];

  if(empty($postData['firstName']) || empty($postData['lastName']) 
	  || empty($postData['email']) || empty($postData['emailConfirm']) 
	  || empty($postData['password']) || empty($postData['passwordConfirm']) 
	  || empty($postData['address']) || empty($postData['city'])
	  || empty($postData['region']) || empty($postData['postalCode'])){
		echo "Hiányzó adat(ok)!";
	} else if($postData['email'] != $postData['emailConfirm']) {
		echo "Az email címek nem egyeznek!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Hibás email formátum!";
	} else if(strlen($postData['password']) < 8 || strlen($postData['password']) > 20) {
		echo "A jelszó túl rövid/hosszú! Legalább 8, maximum 20 karakter hosszúnak kell lennie!";
	} else if ($postData['password'] != $postData['passwordConfirm']) {
		echo "A jelszavak nem egyeznek!";
	} else if(empty($postData['address'])) {
		echo "Cím megadása kötelező!";
	} else if(empty($postData['city'])){
		echo "Város megadása kötelező!";
	} else if(empty($postData['region'])){
		echo "Megye választása kötelező!";
	} else if(empty($postData['postalCode'])){
		echo "Irányítószám megadása kötelező!";
	} else if(!UserRegister($postData['firstName'], $postData['lastName'], $postData['email'], $postData['password'], $postData['address'], $postData['address2'], $postData['city'], $postData['region'], $postData['postalCode'])) {
		echo "Ez a felhasználó már létezik!";
	}
	
	$postData['password'] = $postData['passwordConfirm'] = "";
  }
?>

<form method="post">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerFirstName">Keresztnév*</label>
			<input type="text" class="form-control" id="registerFirstName" name="firstName" value="<?=isset($postData) ? $postData['firstName'] : "";?>">
		</div>
		<div class="form-group col-md-6">
			<label for="registerLastName">Vezetéknév*</label>
			<input type="text" class="form-control" id="registerLastName" name="lastName" value="<?=isset($postData) ? $postData['lastName'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerEmail">Email*</label>
			<input type="email" class="form-control" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
		</div>
		<div class="form-group col-md-6">
			<label for="registerEmail1">Email megerősítés*</label>
			<input type="email" class="form-control" id="registerEmail1" name="emailConfirm" value="<?=isset($postData) ? $postData['emailConfirm'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerPassword">Jelszó*</label>
			<input type="password" class="form-control" id="registerPassword" name="password" value="">
			   <small id="passwordHelpInline" class="text-muted">
      Minimum 8 Maximum 20 karakter hosszú
    </small>
		</div>
		<div class="form-group col-md-6">
			<label for="registerPassword1">Jelszó megerősítés*</label>
			<input type="password" class="form-control" id="registerPassword1" name="passwordConfirm" value="">
		</div>
	</div>
	 <div class="form-group">
    <label for="inputAddress">Cím*</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Utca/Házszám" name="address" value="<?=isset($postData) ? $postData['address'] : "";?>">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Cím2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Tartózkodási cím" name="address2" value="<?=isset($postData) ? $postData['address2'] : "";?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Város*</label>
      <input type="text" class="form-control" id="inputCity" name="city" value="<?=isset($postData) ? $postData['city'] : "";?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Megye*</label>
      <select id="inputState" class="form-control" name="region">
        <option selected>Kiválaszt...</option>
        <option>Bács-Kiskun</option>
		<option>Baranya</option>
		<option>Békés</option>
		<option>Borsod-Abaúj-Zemplén</option>
		<option>Csongrád</option>
		<option>Fejér</option>
		<option>Győr-Moson-Sopron</option>
		<option>Hajdú-Bihar</option>
		<option>Heves</option>
		<option>Jász-Nagykun-Szolnok</option>
		<option>Komárom-Esztergom</option>
		<option>Nógrád</option>
		<option>Pest</option>
		<option>Somogy</option>
		<option>Szabolcs-Szatmár-Bereg</option>
		<option>Tolna</option>
		<option>Vas</option>
		<option>Veszprém</option>
		<option>Zala</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Irányítószám*</label>
      <input type="text" class="form-control" id="inputZip" name="postalCode" value="<?=isset($postData) ? $postData['postalCode'] : "";?>">
    </div>
  </div>
<CENTER>
	<div class="form-group">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" id="gridCheck">
			<label class="form-check-label" for="gridCheck">
				Emlékezz rám
			</label>
		</div>
	</div>

	<button type="submit" class="btn btn-primary" name="register">Regisztrálás</button>
</CENTER>
</form>