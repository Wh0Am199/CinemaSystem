<?php

require_once DATABASE_CONTROLLER;

$filmid = "";

if (array_key_exists('id',$_GET) && !empty($_GET['id'])){
	$filmid = $_GET['id'];
}

$query = "SELECT film_name, age_rating, cinema_hall FROM films WHERE id=".$filmid."";
$film = getRecord($query);

 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['lefoglal'])) {
  $postData = [
    'film_name' => $_POST['film_name'],
    'cinema_hall' => $_POST['cinema_hall'],
	'date' => $_POST['date'],
	'show_time' => $_POST['show_time'],
	'seats' => $_POST['seats']
  ];
  
  if($postData['seats'] < 1){
	echo "Jegyvásárlás esetén a minimum jegy mennyiség 1 darab!";
  }
  else{
	$query = "INSERT INTO reservations (film_name, cinema_hall, date, show_time, seats, uid) VALUES (:film_name, :cinema_hall, :date, :show_time, :seats, :uid)";
	$params = [
		':film_name' => $postData['film_name'],
		':cinema_hall' => $postData['cinema_hall'],
		':date' => $postData['date'],
		':show_time' => $postData['show_time'],
		':seats' => $postData['seats'],
		':uid' => $_SESSION['uid']
	];
	
	if(!executeDML($query,$params)){
		echo "Jegyfoglalás hiba! Kérjük próbálja újra!";
	}
	else{
		header ('Location: index.php?P=listaz');
		echo "Sikeres jegyfoglalás!";
	}
  }
  
}
?>

<form method="post">
<CENTER>
<div class="form-group row">
	<label for="film_name" class="col-sm-1 col-form-label" >Film neve</label>
	<div class="col-sm-3">
		<input type="text" class="form-control" name="film_name" value="<?=$film['film_name']?>" readonly>
    </div>
</div>
<div class="form-group row">
	<label for="cinema_hall" class="col-sm-1 col-form-label" >Moziterem</label>
	<div class="col-sm-3">
		<input type="text" class="form-control" name="cinema_hall" value="<?=$film['cinema_hall']?>" readonly>
    </div>
</div>
<div class="form-group row">
	<label for="date" class="col-sm-1 col-form-label" >Vetítések dátuma</label>
	<div class="col-sm-3">
		<select name="date" class="form-control">
			<option value="2020-Jun-4">2020. Jún. 4.</option>
			<option value="2020-Jun-6">2020. Jún. 6.</option>
			<option value="2020-Jun-12">2020. Jún. 12.</option>
			<option value="2020-Jun-19">2020. Jún. 19.</option>
			<option value="2020-Jun-25">2020. Jún. 25.</option>
			<option value="2020-Jun-30">2020. Jún. 30.</option>
		</select>
    </div>
</div>
<div class="form-group row">
	<label for="show_time" class="col-sm-1 col-form-label" >Vetítés időpontja</label>
	<div class="col-sm-3">
		<select name="show_time" class="form-control">
			<option value="10:00">10:00</option>
			<option value="13:00">13:00</option>
			<option value="17:00">17:00</option>
			<option value="21:00">21:00</option>
		</select>
    </div>
</div>
<div class="form-group row">
	<label for="seats" class="col-sm-1 col-form-label" >Ülőhelyek száma</label>
	<div class="col-sm-3">
		<input type="number" name="seats" min="1" max="10" placeholder="0">
    </div>
</div>
</CENTER>
<button type="submit" class="btn btn-primary" name="lefoglal">Lefoglal</button>
</form>