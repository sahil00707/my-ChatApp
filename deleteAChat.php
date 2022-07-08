<?php 
session_start();
require_once('db_connect.php');
$deleteId=$_POST['deleteId'];


$d="DELETE FROM chat WHERE unique_id=$deleteId";
mysqli_query($conn,$d);
?>