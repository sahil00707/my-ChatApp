var form = document.querySelector("form");


form.onsubmit = (e) => {
    e.preventDefault();
}

$(document).ready(
    function () {
        
        $("#btn").on("click",
            function () {
                var text = $("#text").val();
                var hidden_sender_fname = $("#hidden_sender_fname").val();
                var hidden_sender_lname = $("#hidden_sender_lname").val();
                var hidden_sender_number = $("#hidden_sender_number").val();
             //   var hidden_sender_img = $("#hidden_sender_img").val();
                if (document.querySelector("#text").value != "") {
                    $.ajax({
                        url: "insertChat.php",
                        type: "POST",
                        data: {
                            hidden_sender_fname: hidden_sender_fname,
                            hidden_sender_lname: hidden_sender_lname,
                            hidden_sender_number: hidden_sender_number,
                   //         hidden_sender_img: hidden_sender_img,
                            text: text
                        },
                        success: function (data) {
                        }
                    });
                }
            }
        );
        $("#btn").on("click", function getData() {
            if (document.querySelector("#text").value != "") {
                $.ajax({
                    url: "getData.php",
                    type: "POST",
                    success: function (chat) {
                        $(".chat").html(chat);
                        scrollToBottom();

                        document.querySelector("#text").value = "";
                    }
                })
            }
        });

        $(".delete-chat").on("click",
            function () {

                if(confirm("Are you Sure?")){
                $.ajax({
                    url: "deleteChat.php",
                    type: "POST",

                    success: function () {
                        getChat();
                    }
                })
            }
        }
        );


        function getChat() {
            $.ajax({
                url: "getData.php",
                type: "POST",
                success: function (chat) {
                    $(".chat").html(chat);


                }
            });

        }

        $(document).on("click", ".chat_text",
            function () {
                var deleteId = $(this).attr("id");
                if (confirm("Do You Want to delete this Messege")) {
                    $.ajax({
                        url: "deleteAChat.php",
                        type: "POST",
                        data: {
                            deleteId: deleteId
                        },
                        success: function () {
                            getChat();
                        }
                    })
                }
            }
        )
        getChat();
        //     setInterval(getChat, 100);
    }
);
var chatBox = document.querySelector(".chat");
function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}


