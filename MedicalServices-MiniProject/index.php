<?php

    session_start();
    $request = $_SERVER["REQUEST_URI"];
    $request = str_replace("/MedicalServices-MiniProject", "", $request);
    date_default_timezone_set("Asia/Tehran");

    # GET USER LOGIN ID FOR WOLLOWING
    if(isset($_GET["user-register"]))
    {
        $user_register = $_GET["user-register"];
        if($user_register == 1)
        {
            $_SESSION["user-register"] = "patient";
        }
        else
        {
            $_SESSION["user-register"] = "doctor";
        }
    }
    else
    {
        $user_register = "";
        $_SESSION["user-register"] = "";
    }

    switch ($request)
    {
        case("/"):
            require "controller/index.php";
            break;

        case ("/registration_form.php?user-register=$user_register"):
            require "controller/registration_form.php";
            break;

        case ("/registration_process.php?user-register=$user_register"):
            require "controller/registration_process.php";
            break;

        case ("/user_page.php"):
            require "controller/user_page.php";
            break;

        case ("/login"):
            require "controller/login.php";
            break;

        case ("/search"):
            require "controller/search.php";
            break;


        case("/index.php"):
            require "controller/index.php";
            break;
            
        case("/login.php"):
            require "controller/index.php";
            break;
            
        case("/logout"):
            require "controller/logout.php";
            break;

        case("/add_post_proccess.php"):
            require "controller/add_post_proccess.php";
            break;  

        case("/appointment-reserve"):
            require "controller/appointment_reserve.php";
            break;
                  
        case("/add-service"):
            require "controller/add_service.php";
            break;
   
       case("/display-servicess"):
            require "controller/display_servicess.php";
            break;
            
        case("/reserved-appointment"):
            require "controller/reserved_appointment.php";
            break;
                    
        default:
            require "controller/404.php";
            break;
    }

?>