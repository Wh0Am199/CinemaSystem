<?php 
	$query = "SELECT id, film_name, age_rating, cinema_hall FROM films ORDER BY id DESC";
	require_once DATABASE_CONTROLLER;
	$films = getList($query);
?>
<?php if(count($films) <= 0) : ?>
	<h1>No films found in the database.</h1>
<?php else : ?>
	<table class="table">
		<thead>
			<tr>
				<th>Film:</th>
				<th>Korhatár besorolás:</th>
				<th>Moziterem:</th>
				<th>Film kiválasztása:</th>
				<th>Jegyfoglalás:</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($films as $f) : ?>
				<tr>
					<td><?=$f['film_name'] ?></td>
					<td><?=$f['age_rating'] ?></td>
					<td><?=$f['cinema_hall'] ?></td>
					<td><button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=listaz?id=<?=$f['id']?>">X</a></font></button></td>
					<td><button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=foglalas&film_name=<?=$f['film_name']?>&cinema_hall=<?=$f['cinema_hall']?>">Foglalás</a></font></button></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>