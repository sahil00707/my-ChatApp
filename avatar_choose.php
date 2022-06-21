<?php 
session_start();
require_once('db_connect.php');


$fname="sahil";
$lname="ajmeri";
$mobile_number=12345;
$emailId="sahil@gmail.com";
$password="12345";


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile_number=$_POST['mobile_number'];
    $emailId=$_POST['emailId'];
    $password=$_POST['password'];

//for image upload


if(isset($_POST['register'])){
    $avatar=$_POST['avatar'];
    $insertIntoDb="INSERT INTO user_information(fname,lname,mobile_number,email_id,password,user_image) VALUES('$fname','$lname','$mobile_number','$emailId','$password','$avatar')";
    $sql=mysqli_query($conn,$insertIntoDb);
    if($sql){
     echo "
     <script>
     window.location.href='login.php';
     </script>
     ";
    }
    else{
        echo "
        <script>
        alert('Account Already Exist');
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css_files/register.css">
    <link rel="stylesheet" href="css_files/default.css">
    <?php      require_once("common_links.php");
  ?>
</head>
<body>
    <div class="center">
        <h2>Realtime Chat Application</h2>
        <form action="#" method="POST" class="form">
          
        <div class="second_page">
            <div class="select_image">
              <h3>Choose Avatar</h3>
            </div>
<div class="image_grid">
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar1.png">
        <img src="avatar/avatar1.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar2.png">
        <img src="avatar/avatar2.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar3.png">
        <img src="avatar/avatar3.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar4.png">
        <img src="avatar/avatar4.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar5.png">
        <img src="avatar/avatar5.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar6.png">
        <img src="avatar/avatar6.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar7.png">
        <img src="avatar/avatar7.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar8.png">
        <img src="avatar/avatar8.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar9.png">
        <img src="avatar/avatar9.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar10.png">
        <img src="avatar/avatar10.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar11.png">
        <img src="avatar/avatar11.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar12.png">
        <img src="avatar/avatar12.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar13.png">
        <img src="avatar/avatar13.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar14.png">
        <img src="avatar/avatar14.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar15.png" selected>
        <img src="avatar/avatar15.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar16.png">
        <img src="avatar/avatar16.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar17.png">
        <img src="avatar/avatar17.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar18.png">
        <img src="avatar/avatar18.png" alt="">
   </div>
  
   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar19.png">
        <img src="avatar/avatar19.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" id="avatar" value="avatar20.png">
        <img src="avatar/avatar20.png" alt="">
   </div>

   
  
</div>
</div>
          <input type="submit" value="Continue to chat" name="register">
        </form>
 
 
</div>
</body>
</html>