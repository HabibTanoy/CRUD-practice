<?php
include 'openConnection.php';
$create_table = "CREATE TABLE users(
    id int NOT NULL AUTO_INCREMENT,
    firstname varchar(255),
    lastname varchar(255),
    email varchar(255),
    address varchar(255),
    PRIMARY KEY (id)
)";

$insert_data = "INSERT INTO users(firstname, lastname, email, address)
VALUES('Habib','Tonoy','tonoy12@abc.com','Shewrapara,Mirpur'),
    ('Hasan','Ratul','ratul33@abc.com','Mirzapur')";

$queries = [
    $create_table,
    $insert_data
];

foreach($queries as $query)
   $connection->query($query);
?>