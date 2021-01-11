<?php
include_once("signin.php");
session_destroy();
echo "<script type='text/javascript'>location.href = 'index.php';</script>";
