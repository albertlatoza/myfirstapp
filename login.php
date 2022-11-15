<?php
include 'bootstrapper.php';

if (isset($_SESSION['user_id'])) {
  header('location:' .URLROOT.'/index.php');


}

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      </head>
      <body>
      <div class="container">
      <h3 class="text-center"> ToDo List App </h3>

      <form action="controller/users_controller.php" method="POST">
      <div class="form-group">
      <label class="form-label"> Username </label>
      <input type="text" class="form-control" name="username">
      </div>

      <div class="form-group">
      <label class="form-label"> Password </label>
      <input type="text" class="form-control" name="password">
      </div>
      <button type="submit" name="login" class="btn btn-success w-100 mt-3"> Login </button>
      
      <div class="form-group">
      <input type="checkbox"> Keep me sign in
      </div>

      <div class="d-grid gap-1 d-md-block">
      <a class="btn btn-white mt-1" href="signup.php"> Create New Account </a>
      <a class="btn btn-white" href="users.php"> Forget Password </a>
      </div>
      </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>