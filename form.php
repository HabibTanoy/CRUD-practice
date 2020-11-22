<?php
$f_name = isset($_POST["fname"]) ? $_POST["fname"] : "";
$l_name = isset($_POST["lname"]) ? $_POST["lname"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$address = isset($_POST["address"]) ? $_POST["address"] : "";
$password = password_hash(isset($_POST["password"]) ? $_POST["password"]: "", PASSWORD_DEFAULT);

include "openConnection.php";

$sql = "INSERT INTO users(firstname, lastname, email, address, password)
VALUES('$f_name', '$l_name', '$email', '$address', '$password')";

$check_sql = $connection->query($sql);
if($check_sql === TRUE) {
    // header("Location: userList.php");
    echo "ok";
} else {
    echo "failed";
}

 ?>