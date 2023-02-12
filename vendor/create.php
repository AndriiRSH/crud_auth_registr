<?php
    require_once 'includes/connect.php';
    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');

    $title = $_POST['titles'];
    $price = $_POST['prices'];
    $description = $_POST['descriptions'];

    mysqli_query($connect, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");
    header('Location: ../index.php');
 