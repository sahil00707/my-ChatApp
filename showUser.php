<?php 
session_start();
require_once("db_connect.php");
$getUserNames=mysqli_query($conn "SELECT * FROM user_information");
$select_box_input=$_POST['select_box_input'];
$str="";
while($userName=mysqli_fetch_assoc($select_box_input)){
    if (strpos($userName['fname'], $select_box_input) !== false) {
        echo 'true';
    }
}
?>