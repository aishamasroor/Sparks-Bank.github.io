<?php

// connecting  to database
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "mysqlpassword";
$database = "bank";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("sorry we failed to connect: " . mysqli_connect_error());
}
?>