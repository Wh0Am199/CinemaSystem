<?php 
	$query = "SELECT id, film_name, age_rating, cinema_hall FROM films ORDER BY id DESC";
	require_once DATABASE_CONTROLLER;
	$films = getList($query);
?>
<center><button type="button" class="btn btn-outline-info"><font size="5"><a href="index.php?P=sajatfoglalas">Saját foglalások</a></font></button><br><br></center>
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
			</tr>
		</thead>
		<tbody>
			<?php foreach ($films as $f) : ?>
				<tr>
					<td><?=$f['film_name'] ?></td>
					<td><?=$f['age_rating'] ?></td>
					<td><?=$f['cinema_hall'] ?></td>
					<td><button type="button" class="btn btn-outline-info"><font size="5"><a href="index.php?P=foglalas&id=<?=$f['id']?>">X</a></font></button></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>