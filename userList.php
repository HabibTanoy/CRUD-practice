<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <h2 class="text-center my-5">User List</h2>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'openConnection.php';
    $sql_visible = "SELECT * FROM users";
    $visible_sql = $connection->query($sql_visible);
    if($visible_sql->num_rows > 0) {
        while($row = $visible_sql->fetch_assoc()) {
            $f_name = $row["firstname"];
            $l_name = $row["lastname"];
            $email = $row["email"];
            $address = $row["address"];
            $id = $row["id"];
    ?>

    <tr>
      <td>
          <?php
          echo $f_name;
          ?>
      </td>
      <td>
      <?php
          echo $l_name;
          ?>
      </td>
      <td>
      <?php
          echo $email;
          ?>
      </td>
      <td>
      <?php
          echo $address;
          ?>
      </td>
      <td>
      <div class="row">
      <div class="col-sm-4" style="left:70px">
      <form action="edit.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id ?>">
          <button type="submit" class="btn btn-primary">Edit</button>
          </form>
      </div>
      <div class="col-sm-4">
      <span>||</span>
      </div>
      <div class="col-sm-4" style="right:70px">
      <form action="delete.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <button type="submit" class="btn btn-danger" >Delete</button>
          </form>
      </div>
    </div>    
      </td>
    </tr>
<?php }
} ?>
  </tbody>
</table>
</body>
</html>