<?php 
session_start();
require_once("db_connect.php");
$number=$_POST['number'];
$getNumbers=mysqli_query($conn,"SELECT * FROM user_information");
$c=0;
while($row=mysqli_fetch_assoc($getNumbers)){
    if($row['mobile_number']==$number){
      $c=1;
      break;
    }
}
if($c==1)
echo "found";
else 
{
   $register_field_fname=$_POST['register_field_fname'] ;
   $register_field_lname=$_POST['register_field_lname']; 
   $register_field_email=$_POST['register_field_email'];
   $avatar=$_POST['avatar'];
   //encypt pasword
   $register_field_password=$_POST['register_field_password']; 
   //Displaying the original string 
  
   
   
   $insert="INSERT INTO user_information(fname,lname,mobile_number,email_id,password,user_image) VALUES('$register_field_fname','$register_field_lname','$number','$register_field_email','$register_field_password','$avatar')";
  $sql=mysqli_query($conn,$insert);
  $_SESSION['current_user']=array('current_user_fname'=>$register_field_fname,'current_user_lname'=>$register_field_lname,'current_user_mobile_number'=>$number,'current_user_image'=>$avatar);
 // move_uploaded_file($tempname, $folder);
}
?>