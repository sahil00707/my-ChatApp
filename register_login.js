var form = document.querySelector(".form");
//var login_form = document.querySelector(".login_form");

var error = $(".error");



form.onsubmit = (e) => {
    e.preventDefault();
}

// login_form.onsubmit = (e) => {
//     e.preventDefault();
// }
function hideError() {
    error.hide();

}

$(document).ready(
    function () {
        $("#proceed_btn").on("click", function () {
            var register_field_fname = $("#register_field_fname").val();
            var register_field_lname = $("#register_field_lname").val();
            var register_field_email = $("#register_field_email").val();
            var number = $("#register_field_number").val();
            var avatar=$('input[name="avatar"]:checked').val();
            var register_field_password = $("#register_field_password").val();
           // var formx=$("form");
       
            if (number != "" && register_field_fname != "" && register_field_lname != "" && register_field_email != "" && register_field_password != "") {
                $.ajax({
                    url: "verifyUser.php",
                    type: "POST",
                    data: {
                        register_field_fname: register_field_fname,
                        register_field_lname: register_field_lname,
                        register_field_email: register_field_email,
                        number: number,
                        register_field_password: register_field_password,
                        avatar:avatar
                       

                    },
                    success: function (data) {
                        document.querySelector("#register_field_fname").value="";
                        document.querySelector("#register_field_lname").value="";
                        document.querySelector("#register_field_email").value="";
                        document.querySelector("#register_field_number").value="";
                        document.querySelector("#register_field_password").value="";
                        if (data == "found") {
                            error.show();

                        }
                        else {
                             location.href = "all_users.php";
                       //     alert("good");
                        }
                    }
                });
            }
            // alert("good")
;        });
        $(".btn_login").on("click",
            function () {
                var mobile_number_login = $(".mobile_number_login").val();
                var password_login = $(".password_login").val();
                if (mobile_number_login != "" && password_login != "") {
                    $.ajax({
                        url: "login-user.php",
                        type: "POST",
                        data: {
                            mobile_number_login: mobile_number_login,
                            password_login: password_login
                        },
                        success: function (data) {

                            document.querySelector(".mobile_number_login").value = "";
                            document.querySelector(".password_login").value = "";
                            if (data == "login_successful") {
                                location.href = "all_users.php";
                            }
                            else {

                                error.show();
                            }
                        }
                    });
                }
            }
        );
    

    }
);

