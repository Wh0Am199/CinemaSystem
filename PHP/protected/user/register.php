<form method="post">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerFirstName">Keresztnév*</label>
			<input type="email" class="form-control" id="registerFirstName" name="firstName" value="">
		</div>
		<div class="form-group col-md-6">
			<label for="registerLastName">Vezetéknév*</label>
			<input type="email" class="form-control" id="registerLastName" name="lastName" value="">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerEmail">Email*</label>
			<input type="email" class="form-control" id="registerEmail" name="email" value="">
		</div>
		<div class="form-group col-md-6">
			<label for="registerEmail1">Email megerősítés*</label>
			<input type="email" class="form-control" id="registerEmail1" name="emailConfirm" value="">
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
    <input type="text" class="form-control" id="inputAddress" placeholder="Utca/Házszám" name="address" value="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Cím2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Tartózkodási cím" name="address2" value="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Város*</label>
      <input type="text" class="form-control" id="inputCity" name="city" value="">
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
      <input type="text" class="form-control" id="inputZip" name="postalCode" value="">
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

	<button type="submit" class="btn btn-primary">Regisztrálás</button>
</CENTER>
</form>