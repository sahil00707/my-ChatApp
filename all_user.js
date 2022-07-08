
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
        var i = 0;
        $("#switch_theme").on("click",
            function () {
                if (i == 0) {
                    i = 1;
                    $.ajax({
                        url: "switch_theme.php",
                        type: "POST",
                        success: function (data) {
                            //       alert(data);
                            darkLightMode();
                        }
                    });
               
                }
                else {
                    i = 0;

                    $.ajax({
                        url: "switch_theme.php",
                        type: "POST",
                        success: function (data) {
                            // alert(data);
                            darkLightMode();
                        }
                    });


                }
            }
        );
        function darkLightMode() {
            //all page
            var all_users_css = document.getElementById("all_users_css");   
            var settings_icon = document.getElementById("settings-icon");   
            var search_icon = document.getElementById("search_icon");   
            //all page
            //drawer
          var dark_text = document.getElementById("dark-text");
          var dark_icon = document.getElementById("dark-icon");
          var cross_icon = document.getElementById("cross-icon");
          var setting_drawer_icon_1 = document.getElementById("setting-drawer-icon-1");
          var setting_drawer_icon_2 = document.getElementById("setting-drawer-icon-2");
          var setting_drawer_icon_3 = document.getElementById("setting-drawer-icon-3");
          var setting_drawer_icon_4 = document.getElementById("setting-drawer-icon-4");
          var setting_drawer_icon_5 = document.getElementById("setting-drawer-icon-5");
         //drawer
            $.ajax({
                url: "darkLightMode.php",
                type: "POST",
                success: function (data) {
                    if (data == "Dark") {
                        ///all page css
                        all_users_css.href = "css_files/all_users-dark-mode.css";
                        settings_icon.src="icons/settings-white.svg";
                        search_icon.src="icons/search_black.svg";
                         ///all page css
                         //drawer
                        dark_icon.src="icons/sun-black.svg";
                        setting_drawer_icon_1.src="icons/image-black.svg";
                        setting_drawer_icon_2.src="icons/power-black.svg";
                        setting_drawer_icon_3.src="icons/lock-black.svg";
                        setting_drawer_icon_4.src="icons/file-text-black.svg";
                        setting_drawer_icon_5.src="icons/trash-black.svg";
                        cross_icon.src="icons/cross-sign-black.svg";
                        dark_text.innerText = "Light Mode";
                        //drawer
                    }
                    else {
                         ///all page css
                         all_users_css.href = "css_files/all_users.css";
                         settings_icon.src="icons/settings-black.svg";
                         search_icon.src="icons/search-white.svg";

                         ///all page css
                          //drawer
                         dark_icon.src="icons/moon-white.svg";
                         dark_text.innerText = "Dark Mode";
                         setting_drawer_icon_1.src="icons/image-white.svg";
                         setting_drawer_icon_2.src="icons/power-white.svg";
                         setting_drawer_icon_3.src="icons/lock-white.svg";
                         setting_drawer_icon_4.src="icons/file-text-white.svg";
                         setting_drawer_icon_5.src="icons/trash-white.svg";
                         cross_icon.src="icons/cross-sign-white.svg";

                          //drawer
                    }
                }
            });

        }
        darkLightMode();
        $(".hide_settings").on("click",
            function () {
                var settings_drawer = $(".settings-drawer");
                settings_drawer.css(
                    "right", "-50%"
                );
            }
        );
        $(".settings_on_btn").on("click",
            function () {
                var settings_drawer = $(".settings-drawer");
                settings_drawer.css(
                    "right", "0"
                );
            }
        );
        $(".logout_btn").on("click",
        function(){
            $.ajax({
                url:"logout.php",
                type:"POST",
                success:function(){

                }
            })
        }
        );
        $(".delete_account").on("click",
        function(){
            if(
confirm("are you sure")){
            
            $.ajax({
                url:"delete_account.php",
                type:"POST",
                data:{

                },
                success:function(){
             window.location.href="register.php";       
                }
            })
        }}
        )
    }
);