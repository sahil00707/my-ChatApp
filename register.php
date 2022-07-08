
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css_files/register-white-mode.css">
    <link rel="icon" href="icons/chat.png">

    <link rel="stylesheet" href="css_files/default.css">
    <link rel="stylesheet" href="css_files/register.css" id="register_id">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php      require_once("common_links.php");
  ?>
</head>
<body>
    <div class="abc"></div>
    <div class="center">
        <h2>Realtime Chat Application</h2>
        <div class="error">
        <button onclick="hideError()"> 
        <img src="icons/cross-sign-white.svg" alt="">
</button>
            <p>There is Some Problem with this number!!! Try different number...</p>
        </div>
        <form action="#" method="POST" class="form register_form" enctype="multipart/form-data">
            <div class="first_page">
            <div class="fisrt_last_name">
                <div class="fname">
                    <h3>First Name <span class="required_field_esterik">*</span></h3>
                    <input type="text" placeholder="First Name"  id="register_field_fname" name="fname" onkeydown="return /[a-z]/i.test(event.key)"   onkeypress="return event.charCode != 32" required autocomplete="off" >
                </div>
                <div class="lname">
                <h3>Last Name  <span class="required_field_esterik">*</span></h3>
                    <input type="text" placeholder="Last Name" id="register_field_lname" name="lname" onkeydown="return /[a-z]/i.test(event.key)"   onkeypress="return event.charCode != 32" required autocomplete="off" >
                </div>
            </div>
            <div class="email_address">
                <h3>Email Address  <span class="required_field_esterik">*</span></h3>
                <input type="email" placeholder="abc@gmail.com" id="register_field_email" name="emailId" onkeypress="return event.charCode != 32" required autocomplete="off" >
            </div>
            <div class="Mobile_number">
                <h3>Mobile Number  <span class="required_field_esterik">*</span></h3>
                <input type="number" placeholder="Enter Your Mobile Number" id="register_field_number" name="mobile_number" onkeypress="return event.charCode != 32" required autocomplete="off" >
            </div>
            <div class="password">
                <h3>Password  <span class="required_field_esterik">*</span></h3>
                <input type="password" placeholder="Password"  id="register_field_password" name="password" onkeypress="return event.charCode != 32" required autocomplete="off" >
            </div>
        
</div>



<div class="second_page" >
            <div class="select_image">
              <h3>Choose Avatar  <span class="required_field_esterik">*</span></h3>
            </div>
<div class="image_grid">
   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar" value="avatar1.png" checked>
        <img src="avatar/avatar1.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar2.png">
        <img src="avatar/avatar2.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar3.png">
        <img src="avatar/avatar3.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar4.png">
        <img src="avatar/avatar4.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar5.png">
        <img src="avatar/avatar5.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar6.png">
        <img src="avatar/avatar6.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar7.png">
        <img src="avatar/avatar7.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" class="avatar"  value="avatar8.png">
        <img src="avatar/avatar8.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" class="avatar"  value="avatar9.png">
        <img src="avatar/avatar9.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar"  value="avatar10.png">
        <img src="avatar/avatar10.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar" class="avatar"  value="avatar11.png">
        <img src="avatar/avatar11.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"    class="avatar"  value="avatar12.png">
        <img src="avatar/avatar12.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar"  value="avatar13.png">
        <img src="avatar/avatar13.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar14.png">
        <img src="avatar/avatar14.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar"  value="avatar15.png" >
        <img src="avatar/avatar15.png" alt="">
   </div>

   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar"  value="avatar16.png">
        <img src="avatar/avatar16.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar"  value="avatar17.png">
        <img src="avatar/avatar17.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar18.png">
        <img src="avatar/avatar18.png" alt="">
   </div>
  
   
   <div class="avatar av">
       <input type="radio" name="avatar"  class="avatar"  value="avatar19.png">
        <img src="avatar/avatar19.png" alt="">
   </div>

   
   <div class="avatar av">
       <input type="radio" name="avatar"   class="avatar"  value="avatar20.png">
        <img src="avatar/avatar20.png" alt="">
   </div>

   
  
</div>
</div>
</form>
        <div class="submit_btn">
          <input type="submit" value="Proceed to chat" name="submit"  id="proceed_btn">
         <a href="login.php"><button>Login Now</button></a>
        </div>

 
</div>

<script src="register_login.js"></script>
<script>
    function goToLogin(){
        window.location.href="login.php";
    }
</script>


<script>
    $(document).ready(
        function(){
            function darkLightMode() {
                var register_id = document.getElementById("register_id");
            $.ajax({
                url: "darkLightMode.php",
                type: "POST",
                success: function (data) {
                    // alert(data);
                    if (data == "Dark") {     
                        register_id.href = "css_files/register-dark-mode.css";      
                   //     back_btn.src="icons/arrow-left-white.svg";
                    }
                    else {        
                        chat_area_css.href = "css_files/register.css";
                    //    back_btn.src="icons/arrow-left-black.svg";

                    }
                }
            });

        }
        darkLightMode();
        }
    );
</script>
</body>
</html>