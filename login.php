<?php
include "openConnection.php";

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"]: "";

$sql = "SELECT * FROM users WHERE email = '$email'";
$check_sql = $connection->query($sql);
if($check_sql->num_rows > 0) {   
    while($row = $check_sql->fetch_assoc()) {
        $Decryption = $row["password"];
    }
}
$pas_verify = password_verify($password, $Decryption);

if($pas_verify) {
    header("Location: userList.php");
} else {
    header("Location: signin.php");
}

?>