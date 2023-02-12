<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');
    $title = $_POST['titles'];
    $description = $_POST['descriptions'];
    $price = $_POST['prices'];
    $id = $_POST['ids'];
    mysqli_query($connect,"UPDATE `goods` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `goods`.`id` = '$id'");
    header('Location: ../index.php');