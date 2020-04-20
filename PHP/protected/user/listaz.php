<?php 
	$query = "SELECT id, film_name, age_rating, cinema_hall FROM films ORDER BY id DESC";
	require_once DATABASE_CONTROLLER;
	$films = getList($query);
?>
<?php if(count($films) <= 0) : ?>
	<h1>No films found in the database.</h1>
<?php else : ?>
	<table class="">
		<thead>
			<tr>
				<th scope="col">Film:</th>
				<th scope="col">Korhatár besorolás:</th>
				<th scope="col">Moziterem:</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($films as $f) : ?>
				<tr>
					<td><?=$f['film_name'] ?></td>
					<td><?=$f['age_rating'] ?></td>
					<td><?=$f['cinema_hall'] ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<?php endif; ?>