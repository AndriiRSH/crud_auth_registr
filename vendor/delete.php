<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `goods`.`id` = 'id'");
    header('Location: ../index.php');