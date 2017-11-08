<?php
include 'connect.php';
session_start();
unset($_SESSION['signed_in']);
session_destroy();

header("Location:index.php");
exit;
?>