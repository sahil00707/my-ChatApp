<?php
require_once('db_connect.php');
session_start();
if(!isset($_SESSION['current_user'])){
    echo "
    <script>
    window.location.href='login.php';
    </script>
    ";
}


if(isset($_POST['chat'])){
    $hidden_fname=$_POST['hidden_fname'];
    $hidden_lname=$_POST['hidden_lname'];
    $hidden_mobile_number=$_POST['hidden_mobile_number'];
    $hidden_image=$_POST['hidden_image'];
    $_SESSION['selected_user']=array('selected_user_fname'=>$hidden_fname,'selected_user_lname'=>$hidden_lname,'hidden_mobile_number'=>$hidden_mobile_number,'hidden_image'=>$hidden_image);
 echo "
 <script>
 window.location.href='chat_area.php';
 </script>
 ";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
  <link rel="stylesheet" href="css_files/all_users.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php      require_once("common_links.php");  ?>

</head>
<body>
<!-- /<input type="button" value="hello" id="imgxxx"> -->

<div class="center">
<div class="current_user">
    <div class="user_img">
        <img src="avatar/<?php  echo $_SESSION['current_user']['current_user_image'] ?>" alt="">
    </div>
    <div class="active_logout">
    <div class="name_active">
        <h3>  <?php    
        echo $_SESSION["current_user"]["current_user_fname"]." ".$_SESSION["current_user"]["current_user_lname"];
        ?> </h3>
    <div class="active_current_user">
        <div class="green_dot"></div>
        <p>Active Now</p>
    </div>
    </div>
    <div class="logout">
        <a href="login.php">
        <button>Logout</button>
        </a>
    </div>
    </div>

</div>
<div class="select_user_to_chat">
  <input type="text" placeholder="Select user to chat" class="select_box_input">
  <button class="img"><img src="icons/search_white.svg" alt=""></button>
</div>



<div class="all_users">
</div>
</div>

<script src="all_user.js"></script>
</body>
</html> 