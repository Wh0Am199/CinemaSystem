<form>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerFirstName">Keresztnév*</label>
			<input type="email" class="form-control" id="registerFirstName">
		</div>
		<div class="form-group col-md-6">
			<label for="registerLastName">Vezetéknév*</label>
			<input type="email" class="form-control" id="registerLastName">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerEmail">Email*</label>
			<input type="email" class="form-control" id="registerEmail">
		</div>
		<div class="form-group col-md-6">
			<label for="registerEmail1">Email megerősítés*</label>
			<input type="email" class="form-control" id="registerEmail1">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerPassword">Jelszó*</label>
			<input type="password" class="form-control" id="registerPassword">
			   <small id="passwordHelpInline" class="text-muted">
      Minimum 8 Maximum 20 karakter hosszú
    </small>
		</div>
		<div class="form-group col-md-6">
			<label for="registerPassword1">Jelszó megerősítés*</label>
			<input type="password" class="form-control" id="registerPassword1">
		</div>
	</div>
	 <div class="form-group">
    <label for="inputAddress">Cím*</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Utca/Házszám">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Cím2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Tartózkodási cím">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Város*</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Megye*</label>
      <select id="inputState" class="form-control">
        <option selected>Kiválaszt...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Irányítószám*</label>
      <input type="text" class="form-control" id="inputZip">
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