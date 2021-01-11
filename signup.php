<?php
include_once("connect.php");

$name = $_POST['firstname'];
$last = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$username = $_POST['username'];
$password = $_POST['password'];
$nat = $_POST['nationality_id'];





$stmt = $conn->prepare("INSERT INTO customers (first_name, last_name, datebirth, phone_number,nationality,email,username,pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssisss", $name, $last, $date, $phone, $nat, $email, $username, $password);



$result = $stmt->execute();


if ($result) {
    header('Location: index.php');
    $stmt->close();
} else {
    echo $conn->error_list;
    die;
}
