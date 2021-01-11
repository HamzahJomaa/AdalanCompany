<?php
session_start();

include_once("connect.php");


if (isset($_POST['submit'])) {
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
}


$get_cust = "SELECT * FROM customers WHERE username='" . $username . "'";

$result = $conn->query($get_cust);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    if ($data["pass"] === $password) {
        $_SESSION["userID"] = $data["id"];
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}

mysqli_close($conn);
