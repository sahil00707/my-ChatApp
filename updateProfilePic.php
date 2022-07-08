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
$mobile_number= $_SESSION['current_user']['current_user_mobile_number'];

if(isset($_POST['update'])){
 $fname=$_POST['fname'];   
 $lname=$_POST['lname'];   
 $email=$_POST['email'];   
 //$number=$_POST['mobile_number'];   
 //$password=$_POST['password'];   
 $filename = $_FILES["profile_pic"]["name"];
 $tempname = $_FILES["profile_pic"]["tmp_name"];
 $folder = "avatar/" . $filename;
 $extensions=array("jpg","png","svg","jpeg");
 $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
if(in_array($imageFileType,$extensions)){
$update="UPDATE `user_information` SET `fname`='$fname',`lname`='$lname',`email_id`='$email',`user_image`='$filename' WHERE mobile_number=$mobile_number";
$uc="UPDATE `chat` SET `user_img`='$filename' WHERE sender_number=$mobile_number";
mysqli_query($conn,$uc);

if(mysqli_query($conn,$update)){
    if(
    move_uploaded_file($tempname, $folder)){
        echo "
        <script>
 window.location.href='all_users.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Some error has appeared');
        </script>
        ";
    }
}
else{
    echo "
    <script>
    alert('Some error has appeared');
    </script>
    ";
}
}

else{
    echo "
    <script>
    alert('Only image is allowed');
    </script>
    ";   
}
}
$getInfo=mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number=$mobile_number");

while($i=mysqli_fetch_assoc($getInfo)){
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Profile Pic</title>
    <link rel="stylesheet" href="css_files/updateProfilePic.css"  id="all_users_css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

<?php require_once "common_links.php";?>
</head>
<body>
    <div class="center">
<h2>Update  Your Info</h2>
<form action="#" method="POST" enctype="multipart/form-data">
    <p>First Name</p>
    <input type="text" value="<?php echo $i['fname']?>" name="fname" onkeydown="return /[a-z]/i.test(event.key)"   onkeypress="return event.charCode != 32" required >
    <p>Last Name</p>
    <input type="text"  value="<?php echo $i['lname']?>" name="lname" onkeydown="return /[a-z]/i.test(event.key)"   onkeypress="return event.charCode != 32" required >

    <p>Email Address</p>
    <input type="email" value="<?php echo $i['email_id']?>" name="email"   onkeypress="return event.charCode != 32" required >

    <p>Select Profile Pic</p>
    <input type="file"  name="profile_pic"   required>

<input type="submit" value="Update" name="update">
</form>
<a href="all_users.php"><button>Back</button></a>

    </div>
</body>
</html>
<?php } ?>