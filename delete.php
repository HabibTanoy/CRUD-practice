<?php
$id = isset($_POST["id"]) ? $_POST["id"] : "";
include 'openConnection.php';
$sql = "DELETE FROM users WHERE id = $id";

$result = $connection->query($sql);
// echo $result->error;
if($result === TRUE) {
    header("Location: userList.php");
} else {
    echo "error";
}
?>