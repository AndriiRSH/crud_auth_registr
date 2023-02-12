<?php
    session_start();
//    require_once './connect.php';

    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');
    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    if ($password === $password_confirm){
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`) VALUES (NULL, '$name', '$login', '$email', '$password')");
        $_SESSION['message'] = 'Реєстрація пройшла успішно!';
        header('Location: ../index.php');
    }else{
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../register.php');
    }
