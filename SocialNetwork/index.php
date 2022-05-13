<?php

    session_start();
    $request = $_SERVER["REQUEST_URI"];
    // echo $request;
    // die;

    switch ($request)
    {
        case("/SocialNetwork/"):
            require __DIR__ . "/view/index.php";
            break;

        case ("/SocialNetwork/registration_form.php"):
            require __DIR__ . "/view/registration_form.php";
            break;

        case ("/SocialNetwork/user_registration_process"):
            require __DIR__ . "/controller/user_registration_process.php";
            break;

        case ("/SocialNetwork/home.php"):
            if(isset($_SESSION["login_status"]))
            {
                if($_SESSION["login_status"] == true)
                {
                    require __DIR__ . "/view/home.php";
                    break;
                }
                else
                {
                    require __DIR__ . "/view/index.php";
                    break;        
                }
            }

        case("/SocialNetwork/index.php"):
            require __DIR__ . "/view/index.php";
            break;
            
        case("/SocialNetwork/login.php"):
            require __DIR__ . "/view/index.php";
            break;

        case("/SocialNetwork/personal_profile.php"):
            require __DIR__ . "/view/personal_profile.php";
            break;

        case("/SocialNetwork/user_login"):
            require __DIR__ . "/controller/user_login_process.php";
            break;

        case("/SocialNetwork/test"):
            require __DIR__ . "/view/test.php";
            break;

        case("/SocialNetwork/logout"):
            require __DIR__ . "/controller/logout.php";
            break;

        case("/SocialNetwork/add_post_proccess.php"):
            require __DIR__ . "/controller/add_post_proccess.php";
            break;            

        default:
            require __DIR__ . "/view/404.php";
            break;
    }

?>