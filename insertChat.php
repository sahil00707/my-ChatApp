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
//$hidden_sender_img=$_SESSION['current_user']['current_user_image'];
$receiver_number=$_SESSION['selected_user']['hidden_mobile_number'];

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "Rinku";
  
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($text, $ciphering,
            $encryption_key, $options, $encryption_iv);


$insert="INSERT INTO chat(sender_fname,sender_lname,sender_number,receiver_number,chat_text) VALUES('{$hidden_sender_fname}','{$hidden_sender_lname}','{$hidden_sender_number}','{$receiver_number}','{$encryption}')";
$sql=mysqli_query($conn,$insert);

?>