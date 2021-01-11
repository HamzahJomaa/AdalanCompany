<?php
$db = "adalancompany";
$conn = new mysqli("localhost", "eps_user", "3ps_us3r", $db);

mysqli_query($conn, "SET NAMES 'utf8' ");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<script>console.log('Connected');</script>";
}
