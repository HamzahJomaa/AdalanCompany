<?php
include_once("signin.php");
session_destroy();
$userID = null;
echo "<script type='text/javascript'>location.href = 'index.php';</script>";
