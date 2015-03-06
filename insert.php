<?php
//Insert.php
//Part of XBHS Battleship
//
//Makes a cubbyhole

require 'db.php';

$conn = new mysqli($servername, $username, $password, "battleship", 3306);

$sql = "INSERT INTO `battleship`.`games` (`id`, `start`, `message`) VALUES (NULL, CURRENT_TIMESTAMP, '".$_GET['message']."');";

if ($conn->query($sql) === TRUE) {
    echo $conn->insert_id;
} else {
    http_response_code(500);
    echo "Error inserting: " . $conn->error;
}

