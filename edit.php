<?php
include "openConnection.php";
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php
$f_name = isset($_POST["fname"]) ? $_POST["fname"] : "";
$l_name = isset($_POST["lname"]) ? $_POST["lname"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$address = isset($_POST["address"]) ? $_POST["address"] : "";
$id = isset($_POST["id"]) ? $_POST["id"] : "";

$sql = "SELECT * FROM users WHERE id = $id";

$select = $connection->query($sql);
if($select->num_rows > 0) {
  while($row = $select->fetch_assoc()) {
      $f_name = $row["firstname"];
      $l_name = $row["lastname"];
      $email = $row["email"];
      $address = $row["address"];
      $id = $row["id"];
?>

    <h2 class="text-center font-weight-bold my-5 pt-5 text-uppercase">User Update</h2>
    <div class="d-flex justify-content-center" style="margin: 0 auto;">
        <form class="w-50" action="update.php" method="POST">
            <div class="form-row">
              <div class="col">
              <label>First Name</label>
                <input type="text" class="form-control" name="fname" value="<?php
              echo $f_name;
              ?>">
              </div>
              <div class="col">
              <label>Last Name</label>
                <input type="text" class="form-control" name="lname" value="<?php
              echo $l_name;
              ?>">
              </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?php
              echo $email;
              ?>">
                </div>
                <div class="col">
                <label>Address</label>
                  <input type="text" class="form-control" name="address" value="<?php
              echo $address;
              ?>">
              <div class="col">
                <input type="hidden" class="form-control" name="id" value="<?php
              echo $id;
              ?>">
              </div>
                </div>
              </div>
              <br>
              <div class="text-center">
              <button type="submit" class="btn btn-secondary">Update</button>
              </div>
          </form>
      </div>
      <?php }
} ?>
</body>
</html>