<?php
include("header.php");

if (!isset($userID)) {
    echo "<script type='text/javascript'>location.href = 'sign-in   .php';</script>";
}
?>

<head>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Adalan Company - Order</title>

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <?php
            include("order-form.php");
            ?>
        </div>
    </div>

    <?php
    include("scripts.php");
    session_abort();
    ?>
</body>