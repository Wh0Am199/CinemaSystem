<hr>
<CENTER>
	<div class="container">
  <div class="row justify-content-md-center">
  <div class="col col-lg-2">
     <button type="button" class="btn btn-outline-info"><font size="5"><a href="index.php">Home</a></font></button>
    </div>
	<?php if(!IsUserLoggedIn()) : ?>
    <div class="col-md-auto">
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=login">Login</a></font></button>
    </div>
    <div class="col col-lg-2">
      <button type="button" class="btn btn-outline-info"><font size="5"><a href="index.php?P=register">Register</a></font></button>
    </div>
	<?php else : ?>
	<div class="col-md-auto">
		<font size="5">Bejelentkezve: <b><?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></b></font>
    </div>
	<div class="col-md-auto">
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=logout">Logout</a></font></button>
    </div>
    <div class="col-md-auto">
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="listaz.php?P=login">Listázás</a></font></button>
    </div>
	<?php endif; ?>
  </div>
</CENTER>
<hr>
