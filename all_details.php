<?php
session_start();
require_once('db_connect.php');

if (!isset($_SESSION['current_user'])) {
    echo "
    <script>
    window.location.href='login.php';
    </script>
    ";
}

$mobile_number=$_SESSION['selected_user']['hidden_mobile_number'];
$getAllInfo=mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number=$mobile_number");
while($r=mysqli_fetch_assoc($getAllInfo))   {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Details</title>
    <link rel="stylesheet" href="css_files/all_details.css" id="chat_area_css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php      require_once("common_links.php");  ?>
</head>
<body>
    <div class="center">
<div class="profile_pic">
    <img src="avatar/<?php  echo $r['user_image']?>" alt="">
</div>
<div class="details">
    <p><span>First Name : </span> <?php  echo $r['fname']?> </p>
    <p><span>Last Name : </span> <?php  echo $r['lname']?> </p>
    <p><span>Mobile Number : </span> <?php  echo $r['mobile_number']?> </p>
    <p><span>Email Address : </span> <?php  echo $r['email_id']?> </p>
<a href="all_users.php"> <button>Back</button></a>
</div>
    </div>
</body>
</html>
<?php  }?>