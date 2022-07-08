<?php  
session_start();
require_once("db_connect.php");
$mobile_number=$_SESSION["current_user"]["current_user_mobile_number"];
$t=mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number='$mobile_number'");

while($theme=mysqli_fetch_assoc($t)){
    if($theme['Preffered_theme']=="Light"){
//$update_theme="UPDATE user_information SET Preffered_theme='Dark' WHERE mobile_number='$mobile_number'";
//mysqli_query($conn,$update_theme); 
echo "Dark";
}
    else{
     //   $update_theme="UPDATE user_information SET Preffered_theme='Light' WHERE mobile_number='$mobile_number'";
     //   mysqli_query($conn,$update_theme); 
        echo "Light";
    }
}

?>