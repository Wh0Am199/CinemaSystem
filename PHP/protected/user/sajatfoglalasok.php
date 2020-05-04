<?php 
	$query = "SELECT * FROM reservations WHERE uid=".$_SESSION['uid']."";
	require_once DATABASE_CONTROLLER;
	$films = getList($query);
?>

<?php if(count($films) <= 0) : ?>
	<h1>Nem található általad foglalt időpont!.</h1>
<?php else : ?>
	<table class="table">
		<thead>
			<tr>
				<th>Film:</th>
				<th>Moziterem:</th>
				<th>Dátum:</th>
				<th>Időpont:</th>
				<th>Lefoglalt ülőhelyek száma:</th>
				<th>Foglalás törlése</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($films as $f) : ?>
				<tr>
					<td><?=$f['film_name'] ?></td>
					<td><?=$f['cinema_hall'] ?></td>
					<td><?=$f['date'] ?></td>
					<td><?=$f['show_time'] ?></td>
					<td><?=$f['seats'] ?></td>
					<td><button type="button" class="btn btn-outline-info"><font size="5"><a href="index.php?P=torol&id=<?=$f['reservationid']?>">Töröl</a></font></button></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>