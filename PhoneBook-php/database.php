<?php
    //اتصال به پایگاه داده
    $connection = mysqli_connect("localhost", "root", "", "phonebook");

    if(mysqli_connect_errno() == 0)
        {
        }

    else
        {
            echo msqli_connect_error();
        }
?>