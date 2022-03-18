<?php
    //اتصال به پایگاه داده
    $connection = mysqli_connect("localhost", "root", "", "family");
    mysqli_query($connection, "SET CHARACTER SET utf8");

    if(mysqli_connect_errno() == 0)
        {
        }

    else
        {
            echo "خطایی رخ داده است";
            echo msqli_connect_error();
            
        }
?>