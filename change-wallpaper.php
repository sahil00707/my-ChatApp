<?php
require_once "db_connect.php";

session_start();
$mobile_number=$_SESSION['current_user']['current_user_mobile_number'];
if(isset($_POST['select_background_image'])){
    $chat_background_image=$_POST['chat_background_image'];
$update_backgroung_image="UPDATE user_information SET chat_background_image='$chat_background_image' WHERE mobile_number='$mobile_number' ";
mysqli_query($conn,$update_backgroung_image);
echo "
<script>
window.location.href='all_users.php'
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
    <title>Select Wallpaper</title>
    <link rel="stylesheet" href="css_files/change-wallpaper.css" >
    <link rel="stylesheet" href="css_files/default.css" >

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>
<?php require_once "common_links.php";?>
</head>
<body>
<div class="center">
<form action="#" method="POST">

<div class="select_wallpaer">
    <a href="all_users.php"><img src="icons/arrow-left-black.svg" alt=""></a>
    <h2>Select Wallpaper</h2>
</div>
<div class="all-wallpaper">
<?php 

$getWallpaper=mysqli_query($conn, "SELECT * FROM chat_background_images");
while($t=mysqli_fetch_assoc($getWallpaper)){

?>
<label for="<?php echo $t['background_image_id']?>">
    <input type="radio" name="chat_background_image" id="<?php echo $t['background_image_id']?>" value="<?php echo $t['background_image_url']?>" >
<div class="wallpaper">
        <img src="<?php echo $t['background_image_url']?>" alt="">
    </div>
</label>
<?php  } ?>

</div>
<div class="select_btn">
    <input type="submit" value="Select" name="select_background_image">
</div>
</form>
</div>
</body>
</html>