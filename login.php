


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="icons/chat.png">

    <link rel="stylesheet" href="css_files/register.css" id="register_id">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

    <?php      require_once("common_links.php");  ?>

</head>
<body>
<div class="center">
        <h2>Realtime Chat Application</h2>
        <div class="error">
        <button onclick="hideError()"> 
        <img src="icons/cross-sign.png" alt="">
</button>
            <p>Wrong Mobile Number or Password!!!</p>
        </div>
        <form action="#" method="POST" class="form login_form">
        
         
            <div class="Mobile_number">
                <h3>Mobile Number   <span class="required_field_esterik">*</span></h3>
                <input type="number" placeholder="Enter Your Mobile Number" class="mobile_number_login" name="mobile_number" required autocomplete="off" >
            </div>
            <div class="password">
                <h3>Password   <span class="required_field_esterik">*</span></h3>
                <input type="password" placeholder="Password" name="password" class="password_login" required autocomplete="off" >
            </div>
            </form>
            <div class="submit_btn">
          <input type="submit" value="Chat Now" class="btn_login" name="login">
          <a href="register.php"><button>Register Now</button></a>
</div>
   
</div>
<script src="register_login.js"></script>

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