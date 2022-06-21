
$(document).ready(
    function () {
        function getAllUser() {
            $.ajax({
                url: "getAllUser.php",
                type: "POST",
                success: function (data) {
                    $(".all_users").html(data);
                }
            });
        }

      //  setInterval(getAllUser,1000);
        getAllUser();

        $(".select_box_input").on("keyup",
            function () {
                var search_input = $(this).val();
                $.ajax({
                    url: "search_user.php",
                    type: "POST",
                    data: {
                        search_input: search_input,
                    },
                    success: function (data) {
                        $(".all_users").html(data);
                    }
                });
            }
        );
    }
);