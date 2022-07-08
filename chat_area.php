<?php
session_start();
require_once 'db_connect.php';

if (!isset($_SESSION['current_user'])) {
    echo "
    <script>
    window.location.href='login.php';
    </script>
    ";
}
$mobile_number = $_SESSION['current_user']['current_user_mobile_number'];
$bimg = 0;
//$simg=0;
$getBackImage = mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number='$mobile_number'");
while ($backimg = mysqli_fetch_assoc($getBackImage)) {
    $bimg = $backimg['chat_background_image'];
//$simg=$backimg['user_image'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Area</title>
    <link rel="stylesheet" href="css_files/chat_area.css" id="chat_area_css">
    <!-- <link rel="stylesheet" href="css_files/chat_area-white-mode.css"> -->
    <link rel="icon" href="icons/chat.png">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php require_once "common_links.php";?>

</head>
<body>
  <div class="center">
  <div class="settings-drawer">
        <button class="hide_settings"><img src="icons/cross-sign-white.svg" alt="" id="cross-icon-chat"></button>

  <button id="switch_theme1">  <img src="icons/moon-white.svg" alt="" id="dark-icon"> <p id="dark-text"> Dark Mode</p> </button>
  <button>
  <a href="change-wallpaper.php"> <img src="icons/image-white.svg" alt=""  id="setting-drawer-icon-1"> <p>Change Wallpaper</p> </a>
</button>

<button>
  <a href="all_details.php"> <img src="icons/info-white.svg" alt=""  id="setting-drawer-icon-2"> <p>View Details</p> </a>
</button>

<button class="delete-chat">
  <img src="icons/trash-white.svg" alt=""  id="setting-drawer-icon-3"> <p>Delete Chat</p>
</button>
    </div>
<div class="selected_user">
   <div class="back_other">
       <a href="all_users.php">
       <div class="back_btn">
           <img src="icons/arrow-left-black.svg" alt="" id="back_btn">
       </div>
</a>
       <div class="name_img">
           <div class="user_img">
               <img src="avatar/<?php echo $_SESSION['selected_user']['hidden_image'] ?>" alt="">
           </div>

           <div class="name_active">
               <h4>

               <?php
echo $_SESSION['selected_user']['selected_user_fname'] . " " . $_SESSION['selected_user']['selected_user_lname'];
?>
               </h4>
               <div class="active_current_user">
                   <div class="green_dot"></div>
                      <p>Active Now</p>
                  </div>
           </div>

       </div>
       <button class="settings_on_btn"><img src="icons/settings-black.svg" alt="Settings" id="chat-setting-icon" ></button>

   </div>
</div>

<div class="chat-send" style="background: url(<?php echo $bimg ?>);      background-size: cover; ">
<div class="chat">




</div>

<div class="send_msg">
    <div class="input_btn">
        <form action="#" method="POST" >
        <input type="text" name="chat_text" placeholder="Enter You Message" class="text"  id="text" autocomplete="off" maxlength="100">
        <input type="submit" value="Send"  name="send" class="sendBtn" id="btn">
        <input type="hidden"   id="hidden_sender_fname"   name="hidden_sender_fname" value="<?php echo $_SESSION['current_user']['current_user_fname'] ?>">
        <input type="hidden"   id="hidden_sender_lname"  name="hidden_sender_lname" value="<?php echo $_SESSION['current_user']['current_user_lname'] ?>">
        <input type="hidden"   id="hidden_sender_number"  name="hidden_sender_number" value="<?php echo $_SESSION['current_user']['current_user_mobile_number'] ?>">
</form>
    </div>
</div>
  </div>
  </div>



<script src="all_user.js"></script>
<script src="my_js.js"></script>
<script>
    $(document).ready(
        function(){
            var i = 0;
        $("#switch_theme1").on("click",
            function () {
                if (i == 0) {
                    $.ajax({
                        url: "switch_theme.php",
                        type: "POST",
                        success: function (data) {
                            //       alert(data);
                            darkLightMode1();
                        }
                    });
                    i = 1;
                }
                else {
                    i = 0;

                    $.ajax({
                        url: "switch_theme.php",
                        type: "POST",
                        success: function (data) {
                            // alert(data);
                            darkLightMode1();
                        }
                    });


                }
            }
        );
            function darkLightMode1() {
            var chat_area_css = document.getElementById("chat_area_css");
            var back_btn = document.getElementById("back_btn");
            var chat_setting_icon = document.getElementById("chat-setting-icon");
            var cross_icon_chat = document.getElementById("cross-icon-chat");
            var setting_drawer_icon_1 = document.getElementById("setting-drawer-icon-1");
          var setting_drawer_icon_2 = document.getElementById("setting-drawer-icon-2");
          var setting_drawer_icon_3 = document.getElementById("setting-drawer-icon-3");
          var dark_text = document.getElementById("dark-text");
          var dark_icon = document.getElementById("dark-icon");
            $.ajax({
                url: "darkLightMode.php",
                type: "POST",
                success: function (data) {
                    // alert(data);
                    if (data == "Dark") {
                        chat_area_css.href = "css_files/chat_area-dark-mode.css";
                        back_btn.src="icons/arrow-left-white.svg";
                        chat_setting_icon.src="icons/settings-white.svg";
                        cross_icon_chat.src="icons/cross-sign-black.svg";
                        setting_drawer_icon_1.src="icons/image-black.svg";
                        setting_drawer_icon_2.src="icons/info-black.svg";
                        setting_drawer_icon_3.src="icons/trash-black.svg";
                        dark_icon.src="icons/sun-black.svg";
                        dark_text.innerText = "Light Mode";
                    }
                    else {
                        chat_area_css.href = "css_files/chat_area.css";
                        back_btn.src="icons/arrow-left-black.svg";
                        chat_setting_icon.src="icons/settings-black.svg";
                        cross_icon_chat.src="icons/cross-sign-white.svg";
                        setting_drawer_icon_1.src="icons/image-white.svg";
                         setting_drawer_icon_2.src="icons/info-white.svg";
                         setting_drawer_icon_3.src="icons/trash-white.svg";
                         dark_icon.src="icons/moon-white.svg";
                         dark_text.innerText = "Dark Mode";
                    }
                }
            });

        }
        darkLightMode1();
        }
    );
</script>
</body>
</html>