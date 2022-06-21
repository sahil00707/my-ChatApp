<?php
session_start();
require_once('db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Area</title>
    <link rel="stylesheet" href="css_files/chat_area.css">
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php      require_once("common_links.php");  ?>

</head>
<body>
  <div class="center">
<div class="selected_user">
   <div class="back_other">
       <a href="all_users.php">
       <div class="back_btn">
           <img src="icons/arrow-left-black.svg" alt="">
       </div>
</a>
       <div class="name_img">
           <div class="user_img">
               <img src="avatar/<?php echo $_SESSION['selected_user']['hidden_image']?>" alt="">
           </div>
           <div class="name_active">
               <h4>

               <?php 
               echo $_SESSION['selected_user']['selected_user_fname']." ".$_SESSION['selected_user']['selected_user_lname'];
               ?>
               </h4>
               <div class="active_current_user">
        <div class="green_dot"></div>
        <p>Active Now</p>
    </div>
           </div>
       </div>
   </div>
</div>


<div class="chat">

  
   
   
</div>

<div class="send_msg">
    <div class="input_btn">
        <form action="#" method="POST" >
        <input type="text" name="chat_text" placeholder="Enter You Message" class="text"  id="text" autocomplete="off" >
        <input type="submit" value="Send"  name="send" class="sendBtn" id="btn">
        <input type="hidden"   id="hidden_sender_fname"   name="hidden_sender_fname" value="<?php echo $_SESSION['current_user']['current_user_fname']?>">
        <input type="hidden"   id="hidden_sender_lname"  name="hidden_sender_lname" value="<?php echo $_SESSION['current_user']['current_user_lname']?>">
        <input type="hidden"   id="hidden_sender_number"  name="hidden_sender_number" value="<?php echo $_SESSION['current_user']['current_user_mobile_number']?>">
        <input type="hidden"   id=" hidden_sender_img"  name="hidden_sender_img"  value="<?php echo $_SESSION['current_user']['current_user_image']?>">
</form>
    </div>
</div>
  </div>
 
  <script src="my_js.js"></script>
</body>
</html>