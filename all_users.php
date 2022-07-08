<?php
require_once 'db_connect.php';
session_start();
if (!isset($_SESSION['current_user'])) {
    echo "
    <script>
    window.location.href='login.php';
    </script>
    ";
}

if (isset($_POST['chat'])) {
    $hidden_fname = $_POST['hidden_fname'];
    $hidden_lname = $_POST['hidden_lname'];
    $hidden_mobile_number = $_POST['hidden_mobile_number'];
    $hidden_image = $_POST['hidden_image'];
    $_SESSION['selected_user'] = array('selected_user_fname' => $hidden_fname, 'selected_user_lname' => $hidden_lname, 'hidden_mobile_number' => $hidden_mobile_number, 'hidden_image' => $hidden_image);
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
    <link rel="icon" href="icons/chat.png">
  <link rel="stylesheet" href="css_files/all_users.css"  id="all_users_css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php require_once "common_links.php";?>

</head>
<body>
<!-- /<input type="button" value="hello" id="imgxxx"> -->

<div class="center">
    <div class="settings-drawer">
        <button class="hide_settings"><img src="icons/cross-sign-white.svg" alt="" id="cross-icon"></button>
  <button id="switch_theme">  <img src="icons/moon-white.svg" alt="" id="dark-icon"> <p id="dark-text"> Dark Mode</p> </button>
  <button>
  <a href="change-wallpaper.php"> <img src="icons/image-white.svg" alt=""  id="setting-drawer-icon-1"> <p>Change Wallpaper</p> </a>

</button>
  <button class="logout_btn">
  <a href="login.php"> <img src="icons/power-white.svg" alt="" id="setting-drawer-icon-2"> <p>Logout</p> </a>
</button>
<button>
  <a href="#"><img src="icons/lock-white.svg" alt="" id="setting-drawer-icon-3"> <p> Privacy</p></a>
</button>
<button>
  <a href="#"><img src="icons/file-text-white.svg" alt="" id="setting-drawer-icon-4"> <p>  Terms & Conditions</p> </a>
</button>
<button class="delete_account">
  <a href="#"><img src="icons/trash-white.svg" alt=""  id="setting-drawer-icon-5"> <p> Delete Account </p></a>
</button>
    </div>


    <?php     
    $n=$_SESSION['current_user']['current_user_mobile_number'];
    $geti=mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number=$n");
    while($e=mysqli_fetch_assoc($geti)){
    
    
    ?>
<div class="current_user">
    <a class="user_img" href="updateProfilePic.php">
        <img src="avatar/<?php echo $e['user_image'] ?>" alt="">
        <div class="edit">
          <img src="icons/edit-white.svg" alt="">
        </div>
    </a>
    <div class="active_logout">
    <div class="name_active">
        <h3>  <?php
echo $e['fname'] . " " . $e['lname'];
?> </h3>
    <div class="active_current_user">
        <div class="green_dot"></div>
        <p>Active Now</p>
    </div>
    </div>
   <button class="settings_on_btn"><img src="icons/settings-black.svg" alt="Settings" id="settings-icon"></button>
    </div>
<?php  }?>
</div>
<div class="select_user_to_chat">
  <input type="text" placeholder="Select user to chat" class="select_box_input">
  <button class="img"><img src="icons/search-white.svg" alt="" id="search_icon"></button>
</div>



<div class="all_users">
</div>
</div>

<script src="all_user.js"></script>
<script src="settings.js"></script>
</body>
</html>