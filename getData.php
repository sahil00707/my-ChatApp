<?php
session_start();
require_once("db_connect.php");
$getData= mysqli_query($conn, "SELECT * FROM chat");
$c=0;
while($row=mysqli_fetch_assoc($getData))
{
?>

<?php 
if($row['sender_number']==$_SESSION['current_user']['current_user_mobile_number']  && $row['receiver_number']==$_SESSION['selected_user']['hidden_mobile_number'] )
{
$c++;
$m=$row['sender_number'];
$gp= mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number=$m");
$pp=0;
while($x=mysqli_fetch_assoc($gp)){
$pp=$x['user_image'];
break;
}
?>

  <div class="sender_chat">
        <div class="sender_img">
        <img src="avatar/<?php echo $pp?>" alt="">

        </div>
        <button class="chat_text" id=" <?php echo $row['unique_id'] ?>">


        <?php   
        $tt=$row['chat_text'] ;

        $decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "Rinku";
$options = 0;
$ciphering = "AES-128-CTR";
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($tt, $ciphering, 
        $decryption_key, $options, $decryption_iv);
        ?>
        <p class="ct">  <?php echo $decryption ?></p>

        </button>
    </div>

   <?php  }
   else if($row['sender_number']==$_SESSION['selected_user']['hidden_mobile_number']  && $row['receiver_number']==$_SESSION['current_user']['current_user_mobile_number'] )
   {  
$c++;
   

$m=$row['sender_number'];
$gp= mysqli_query($conn, "SELECT * FROM user_information WHERE mobile_number=$m");
$pp=0;
while($x=mysqli_fetch_assoc($gp)){
$pp=$x['user_image'];
break;
}

   ?> 
    <div class="receiver_chat">
      
        <button class="chat_text">

        
        <?php   
        $tt=$row['chat_text'] ;
        $ciphering = "AES-128-CTR";
        $options = 0;
        $decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "Rinku";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($tt, $ciphering, 
        $decryption_key, $options, $decryption_iv);
        ?>
        <p class="ct">  <?php echo $decryption ?></p>
    </button>
        <div class="receiver_img">
        <img src="avatar/<?php echo $pp?>" alt="">


        </div>
    </div>


    <?php }  }  

    if($c==0)  {?>
    <p class="no_msg_yet">No Message Yet</p>
    <?php 
    }
    ?>