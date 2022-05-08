<?php

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

        case ("/SocialNetwork/home.php"):
            require __DIR__ . "/view/home.php";
            break;

        case("/SocialNetwork/index.php"):
            require __DIR__ . "/view/index.php";
            break;
            
        case("/SocialNetwork/login.php"):
            require __DIR__ . "/view/index.php";
            break;

        case("/SocialNetwork/personal_profile.php"):
            require __DIR__ . "/view/personal_profile.php";
            break;

        default:
            require __DIR__ . "/view/404.php";
            break;
    }

?>