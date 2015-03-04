<?php
$servername = "127.0.0.1";
$username = "battleship";
$password = "9mXm9hfQZJWQfbWN";
$port = 3306;

// Create connection
echo("Starting");
// Create connection
$conn = mysqli_connect($servername, $username, $password, "battleship", 3306);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
