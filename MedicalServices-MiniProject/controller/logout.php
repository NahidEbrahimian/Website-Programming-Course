<?php
    $_SESSION["login_status"] = false;
    unset($_SESSION["display"]);
    header("Location: index.php");
?>