<?php
session_start();
require_once("db_connect.php");
$cm=$_SESSION['current_user']['current_user_mobile_number'];
$sm=  $_SESSION['selected_user']['hidden_mobile_number'];

$deleteAllChat="DELETE FROM chat WHERE sender_number=$cm OR sender_number=$sm";
mysqli_query($conn,$deleteAllChat);
?>