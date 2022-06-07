<?php

    session_start();
    $request = $_SERVER["REQUEST_URI"];
    $request = str_replace("/SocialNetwork", "", $request);
    date_default_timezone_set("Asia/Tehran");

    # GET USER ID FOR WOLLOWING
    if(isset($_GET["user-id"]))
    {
        $_SESSION["user-follow"] = $_GET["user-id"];
        $user_follow = $_GET["user-id"];
    }
    else
    {
        $user_follow = "";
        $_SESSION["user-follow"] = "";
    }

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

        case ("/search"):
            require "controller/search.php";
            break;

        case ("/edit-post"):
            require "controller/edit_post.php";
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

        case("/send-like"):
            require "controller/send_like.php";
            break; 

        case("/delete-comment"):
            require "controller/delete_comment.php";
            break;

        case("/delete-post"):
            require "controller/delete_post.php";
            break;
        
        case("/user_page?user-id=$user_follow"):
            if($user_follow == $_SESSION["user_id"])
            {
                require "controller/personal_profile.php";
                break;
            }
            else
            {
                require "controller/user_page.php";
                break;
            }
        // case("/user_page"):
        //     // if($user_follow == $_SESSION["user_id"])
        //     // {
        //     //     require "controller/personal_profile.php";
        //     //     break;
        //     // }
        //     // else
        //     // {
        //     require "controller/user_page.php";
        //     break;
        //     // }

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

        case("/follow-unfollow-user"):
            require "controller/follow_unfollow_user.php";
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