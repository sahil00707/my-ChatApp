<?php  
require_once("db_connect.php");
session_start();
$mobile_number=$_SESSION['current_user']['current_user_mobile_number'];

$delete_account="DELETE  FROM user_information WHERE mobile_number='$mobile_number'";
$delete_related_chat="DELETE FROM chat WHERE sender_number=$mobile_number OR receiver_number=$mobile_number";
mysqli_query($conn,$delete_account);
mysqli_query($conn,$delete_related_chat);
?>