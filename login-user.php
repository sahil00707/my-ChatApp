<?php 
session_start();

require_once("db_connect.php");

$mobile_number_login=$_POST['mobile_number_login'];

$password_login=$_POST['password_login'];

$getDetails=mysqli_query($conn,"SELECT * FROM user_information");


$l=0;

while($row=mysqli_fetch_assoc($getDetails)){
  

  
//  $decryption = openssl_decrypt($dbPass, $ciphering, $decryption_key, $options, $decryption_iv);
  
    if( $row['password']==$password_login && $row['mobile_number']==$mobile_number_login){
      
  $l=1;

  break;
    }
}
if($l==1){

    $_SESSION['current_user']=array('current_user_fname'=>$row['fname'],'current_user_lname'=>$row['lname'],'current_user_mobile_number'=>$row['mobile_number'],'current_user_image'=>$row['user_image']);
 
    echo "login_successful";    
}
else {

    echo "login_failed";

}

?>