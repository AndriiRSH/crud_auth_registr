<?php

    session_start();
    require_once './connect.php';
    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        //переадрисація на crud
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];
        header('Location: ../profile.php');
    } else{
        $_SESSION['message'] = 'Не вірний логін або пароль';
        header('Location: ../index.php');
    }