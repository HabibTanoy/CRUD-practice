<?php
include 'openConnection.php';
$f_name = isset($_POST["fname"]) ? $_POST["fname"] : "";
$l_name = isset($_POST["lname"]) ? $_POST["lname"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$address = isset($_POST["address"]) ? $_POST["address"] : "";
$id = isset($_POST["id"]) ? $_POST["id"] : "";

$update = "UPDATE users SET firstname = '$f_name', lastname = '$l_name', email = '$email', address = '$address' WHERE id = $id";
$new_update = $connection->query($update);
if($new_update === TRUE) {
  header("Location: userList.php");
} else {
  echo "error";
}
?>