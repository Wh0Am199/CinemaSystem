<?php
require_once DATABASE_CONTROLLER;
if(!empty($_SESSION['uid'])){
	$query = "SELECT isAdmin FROM users WHERE uid=".$_SESSION['uid']."";
	$user = getRecord($query);
}




?>

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
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=szerkeszt&uid=<?=$_SESSION['uid']?>">Profil Szerkesztése</a></font></button>
    </div>
	<div class="col-md-auto">
		<font size="5">Bejelentkezve: <b><?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></b></font>
    </div>
	<div class="col-md-auto">
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=logout">Logout</a></font></button>
    </div>
    <div class="col-md-auto">
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="index.php?P=listaz">Listázás</a></font></button>
    </div>
	<?php endif; ?>
	<?php if (isset($user['isAdmin']) && $user['isAdmin'] == 1):?>
	<div class="col-md-auto">
     <button type="button" class="btn btn-outline-info"> <font size="5"><a href="Web/admin.php">Admin felület</a></font></button>
    </div>
	<?php endif; ?>
  </div>
</CENTER>
<hr>
