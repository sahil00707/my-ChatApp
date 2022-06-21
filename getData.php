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
?>

  <div class="sender_chat">
        <div class="sender_img">
        <img src="avatar/<?php echo $row['user_img']?>" alt="">

        </div>
        <div class="chat_text">
        <p>  <?php echo $row['chat_text'] ?></p>

        </div>
    </div>

   <?php  }
   else if($row['sender_number']==$_SESSION['selected_user']['hidden_mobile_number']  && $row['receiver_number']==$_SESSION['current_user']['current_user_mobile_number'] )
   {  
$c++;
   
   ?> 
    <div class="receiver_chat">
      
        <div class="chat_text">
        <p>  <?php echo $row['chat_text'] ?></p>
    </div>
        <div class="receiver_img">
        <img src="avatar/<?php echo $row['user_img']?>" alt="">


        </div>
    </div>


    <?php }  }  

    if($c==0)  {?>
    <p class="no_msg_yet">No Message Yet</p>
    <?php 
    }
    ?>