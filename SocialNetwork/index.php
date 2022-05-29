<?php

    session_start();
    $request = $_SERVER["REQUEST_URI"];
    $request = str_replace("/SocialNetwork", "", $request);
    // echo $request;
    // die();
    date_default_timezone_set("Asia/Tehran");

    switch ($request)
    {
        case("/"):
            require "controller/index.php";
            break;

        case ("/registration_form.php"):
            require "controller/registration_form.php";
            break;

        case ("/user_registration_process"):
            require "controller/user_registration_process.php";
            break;

        case ("/home.php"):
            if(isset($_SESSION["login_status"]))
            {
                if($_SESSION["login_status"] == true)
                {
                    require "controller/home.php";
                    break;
                }
                else
                {
                    require "controller/index.php";
                    break;        
                }
            }
            else
            {
                require "controller/index.php";
                break;     
            }

        case("/send-comment"):
            require "controller/send_comment.php";
            break; 

        case("/index.php"):
            require "controller/index.php";
            break;
            
        case("/login.php"):
            require "controller/index.php";
            break;

        case("/personal_profile.php"):
            require "controller/personal_profile.php";
            break;

        case("/user_login"):
            require "controller/user_login_process.php";
            break;

        case("/logout"):
            require "controller/logout.php";
            break;

        case("/add_post_proccess.php"):
            require "controller/add_post_proccess.php";
            break;            

        default:
            require "controller/404.php";
            break;
    }

?>