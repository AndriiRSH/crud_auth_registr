<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');
    if (!$connect){
        die('Error connect to db');
    }
