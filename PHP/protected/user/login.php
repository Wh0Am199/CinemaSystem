<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $postData = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ];
?>


<form method="post">
  <CENTER>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-1 col-form-label" >E-mail cím</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3"  placeholder="teszt.elek@gmail.com" name="email" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-1 col-form-label">Jelszó</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputPassword3" placeholder="********" name="password" value="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Bejelentkezés</button>
  </CENTER>
</form>