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
<h2 class="text-center font-weight-bold my-5 pt-5 text-uppercase">Sign Up</h2>
    <div class="d-flex justify-content-center" style="margin: 0 auto;">
      <form action="form.php" class="w-50" method="POST">
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" name="fname" placeholder="First name">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="lname" placeholder="Last name">
          </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
          <br>
          <div class="form-row">
            <!-- <div class="col">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div> -->
            <div class="col">
              <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
        </div>
          <br>
          <div class="text-center">
            <input class="btn btn-danger" type="submit" name="submit">
          </div>
      </form> 
</body>
</html>