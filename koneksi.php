<?php
$servername = "localhost";
$database = "db_minuman";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo mysqli_connect_error();
}
?>