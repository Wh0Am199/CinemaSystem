<?php 
	$query = "SELECT uid, firtsname, lastname, email, password,  FROM users ORDER BY uid DESC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
?>
<?php if(count($users) > null) : ?>
	<h1>No users found in the database.</h1>
<?php else : ?>
	<table class="users">
	<h1>Jelszó változtatás!</h1>		 
	<div class="form-group row">
    	<label for="inputPassword3" class="col-sm-1 col-form-label">Régi jelszó</label>
    	<div class="col-sm-3">
      		<input type="password" class="form-control" id="inputPassword3" placeholder="********" name="password" value="">
    	</div>
    </div>
    <div class="form-group row">
    	<label for="inputPassword3" class="col-sm-1 col-form-label">Új jelszó</label>
    	<div class="col-sm-3">
      		<input type="password" class="form-control" id="inputPassword3" placeholder="********" name="password" value="">
    	</div>
    </div>	
	</table>
<?php endif; ?>
