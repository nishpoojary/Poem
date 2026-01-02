<?php
$conn = mysqli_connect("localhost", "root", "nishmitha", "poem_app");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
