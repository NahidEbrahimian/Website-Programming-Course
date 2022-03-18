<?php 
    include "database.php";

    mysqli_query($connection, "DELETE FROM contacts");

    //redirect
    header("Location: index.php");

?>