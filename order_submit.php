<?php

include("connect.php");

$msg = json_decode(file_get_contents("php://input"));
$userId = $msg->UserId;
$meds = $msg->Medicines;
$sum = 0;



for ($i = 0; $i < count($meds); $i++) {
    $get_med = "SELECT * FROM medicines WHERE medicines.NAME = '" . $meds[$i]->Medicine . "'";
    $query_med = $conn->query($get_med);
    while ($row_cat = $query_med->fetch_assoc()) {
        $med = $row_cat;
    }
    print_r($med);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $med_id  = $med["BARCODE"];
    $med_qty = $meds[$i]->Quantity;
    $med_price = $med["PRICE_LIRA"];
    $order = $msg->OrderId;
    $total = $med_qty * $med_price;
    $stmt = $conn->prepare("INSERT INTO order_items (OrderId, MedId, Qty, UserId, unit_price, total_price) VALUES (?, ?, ?, ?, ?, ? )");
    $stmt->bind_param("iiiidd", $order, $med_id, $med_qty, $userId, $med_price, $total);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
    } else {
        echo $conn->error_list;
        die;
    }

    $sum += $meds[$i]->Quantity;
}


$stmt = $conn->prepare("INSERT INTO orders (UserId, total_qty) VALUES (?, ? )");
$stmt->bind_param("ii", $userId, $sum);
$result = $stmt->execute();
if ($result) {
    $stmt->close();
} else {
    echo $conn->error_list;
    die;
}
