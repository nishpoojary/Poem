<?php
include 'db.php';

// Get POST data
$title = mysqli_real_escape_string($conn, $_POST['title']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$poem = mysqli_real_escape_string($conn, $_POST['poem']);

// Insert into database safely
$query = "INSERT INTO poems (title, poem, created_date, created_time)
          VALUES ('$title', '$poem', '$date', '$time')";

// Execute query
mysqli_query($conn, $query) or die(mysqli_error($conn));

// Redirect back to home
header("Location: index.php");
exit;
?>
