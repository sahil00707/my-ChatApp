<?php 
session_start();
require_once("db_connect.php");

$getAllUser=mysqli_query($conn  ,"SELECT * FROM user_information");

while($row=mysqli_fetch_assoc($getAllUser)){
    if($row['mobile_number']!=$_SESSION['current_user']['current_user_mobile_number']){

    ?>







<div class="user">
        <div class="user_avatar">
            <img src="avatar/<?php echo $row['user_image']?>" alt="">
        </div>
        <div class="name_chat">
            <div class="name_active">
                <h4>
                    <?php  
                    echo $row['fname']." ".$row['lname'];
                    
                    ?>
                </h4>
                <div class="active">
                  
                    <h5>
            <?php  
            $me=$_SESSION['current_user']['current_user_mobile_number'];
            $you=$row['mobile_number'];

            $getMsg=mysqli_query($conn,  "SELECT * FROM chat  ORDER BY unique_id DESC ");
            $chat_text_small="No message yet";
            $chat_name="";
while($msg=mysqli_fetch_assoc($getMsg)){
if($msg['sender_number']==$me && $msg['receiver_number']==$you){
    $chat_name="You"." : ";
    $chat_text_small=$msg['chat_text'];
    break;
}
else if($msg['sender_number']==$you && $msg['receiver_number']==$me)
{
    $chat_name=$msg['sender_fname']." : ";
    $chat_text_small=$msg['chat_text'];
    break;
}
} 

            ?>
            <p class="last_text"><?php  echo $chat_name."".$chat_text_small?></p>
                    </h5>
                </div>
            </div>
            <div class="chat_btn">

            <form action="#" method="POST">

               <input type="submit" value="Chat Now" name="chat" >
               <input type="hidden" name="hidden_fname" value="<?php echo $row['fname'] ?>">
               <input type="hidden" name="hidden_lname" value="<?php echo $row['lname'] ?>">
               <input type="hidden" name="hidden_mobile_number" value="<?php echo $row['mobile_number'] ?>">
               <input type="hidden" name="hidden_image" value="<?php   echo $row['user_image']?>">


</form>
            </div>
        </div>
    </div>

 
    
    <?php
}}
?>