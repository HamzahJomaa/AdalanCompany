<?php
$db = "adalanco_adalancompany";
$conn = new mysqli("173.212.232.45", "adalanco_admin_user", "@d@l@n2021", $db);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
}
