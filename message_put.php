<?php
//Message_put.php
//Part of XBHS Battleship
//
//Puts a message in the cubbyhole

require 'db.php';

$conn = new mysqli($servername, $username, $password, "battleship", 3306);

$sql = "UPDATE `battleship`.`games` SET `message` = '".$_GET['message']."' WHERE `games`.`id` = ".$_GET['id'].";";

if ($conn->query($sql) === TRUE) {
    echo "Entry updated successfully";
} else {
    echo "Error updating: " . $conn->error;
}

