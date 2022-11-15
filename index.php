<?php
include 'bootstrapper.php';

if (!isset($_SESSION['user_id'])) {
  header('location:' .URLROOT."/login.php");


}
$todo = new todo($db_connect);
$tododata = $todo->all_data();
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
          <div class="d-flex justify-content-between">
            <?php echo $_SESSION['fullname']; ?>
            <a href="logout.php">logout</a>
        </div>
          <h3 class="text-center"> Todo List App </h3>
          <?php foreach ($tododata as $key => $td): ?>
          <div class="card mb-">
            <div class="card-body">
              <?php echo $td->todo ?>
            </div>
          </div>
        <?php endforeach ?>

    
          <button class="btn btn-success w-100 mt-2" data-bs-target="#addtodo" data-bs-toggle="modal">Add new Todo</button>
        </div>

        <div class="modal" tabindex="-1" id="addtodo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Modal form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control form-control-lg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>