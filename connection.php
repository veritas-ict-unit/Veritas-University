<?php
// $servername = "localhost";
// $username = "lapsride_lapsride";
// $password = "lapsride2021";
// $dbname = "lapsride_lapsride";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veritaswebsitedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
