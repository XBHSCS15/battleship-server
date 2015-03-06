<?php
require 'db.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, "battleship", 3306);

// Check connection
if (!$conn) {
    http_response_code(500);
    die("Connection failed: " . mysqli_connect_error());
}
echo "ready";
?>
