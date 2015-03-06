<?php
//Message_fetch.php
//Part of XBHS Battleship
//
//Gets a message in the cubbyhole

require 'db.php';

$conn = new mysqli($servername, $username, $password, "battleship", 3306);


$sql = "SELECT `message` FROM `games` WHERE `id` = ".$_GET['id']." LIMIT 1;";
$result = $conn->query($sql);

if ($result !== FALSE) {
    if ($result->num_rows > 0) {
        echo $result->fetch_assoc()['message'];
    } else {
        http_response_code(404); //Send HTTP Not Found error
        echo "Invalid ID";
    }
} else {
    http_response_code(500); //Can't connect to DB
    echo "Error fetching: " . $conn->error;
}

