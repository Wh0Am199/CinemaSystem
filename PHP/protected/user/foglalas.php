<?php 

?>

<form method="post">
<CENTER>
<div class="form-group row">
	<label for="film_name" class="col-sm-1 col-form-label" >Film neve</label>
	<div class="col-sm-3">
		<select name="film_name" class="form-control">
			<option value="<?=$_GET['film_name']?>"><?=$_GET['film_name']?></option>
		</select>
    </div>
</div>
<div class="form-group row">
	<label for="cinema_hall" class="col-sm-1 col-form-label" >Moziterem</label>
	<div class="col-sm-3">
		<select name="cinema_hall" class="form-control">
			<option value="<?=$_GET['cinema_hall']?>"><?=$_GET['cinema_hall']?></option>
		</select>
    </div>
</div>