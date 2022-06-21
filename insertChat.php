<?php 
session_start();
$server="localhost";
$user="root";
$pass="";
$db="chatapp1";
$conn=mysqli_connect($server,$user,$pass,$db);
$text=$_POST['text'];
$hidden_sender_fname=$_POST['hidden_sender_fname'];
$hidden_sender_lname=$_POST['hidden_sender_lname'];
$hidden_sender_number=$_POST['hidden_sender_number'];
$hidden_sender_img=$_SESSION['current_user']['current_user_image'];
$receiver_number=$_SESSION['selected_user']['hidden_mobile_number'];
$insert="INSERT INTO chat(sender_fname,sender_lname,sender_number,receiver_number,chat_text,user_img) VALUES('{$hidden_sender_fname}','{$hidden_sender_lname}','{$hidden_sender_number}','{$receiver_number}','{$text}','{$hidden_sender_img}')";
$sql=mysqli_query($conn,$insert);

?>