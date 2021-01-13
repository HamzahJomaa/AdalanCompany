<?php

include("connect.php");

$msg = json_decode(file_get_contents("php://input"));
$userId = $msg->UserId;
$meds = $msg->Medicines;
$sum = 0;
for ($i = 0; $i < count($meds); $i++) {
    $sum += $meds[$i]->Quantity;
}


$stmt = $conn->prepare("INSERT INTO orders (UserId, total_qty) VALUES (?, ? )");
$stmt->bind_param("ii", $userId, $sum);
$result = $stmt->execute();
if ($result) {
    $stmt->close();
    echo "true";
} else {
    echo $conn->error_list;
    die;
}


// var_export($med);
