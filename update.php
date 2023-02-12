<?php
    require_once 'includes/connect.php';
    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');

    $goods_id = $_GET['id'];
    $good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id`='$goods_id'");
    $good = mysqli_fetch_assoc($good);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/crud.css">
    <title>Оновити товар</title>
</head>
<body>
    <h2>Оновити товар</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="ids" value="<?= $goods_id ?>">
        <p>Назва</p>
        <input type="text" name="titles" value="<?= $good['title'] ?>">
        <p>Опис</p>
        <textarea name="descriptions"><?= $good['description'] ?></textarea>
        <p>Ціна</p>
        <input type="number" name="prices" value="<?= $good['price'] ?>">
        <button type="submit">Оновити</button>
    </form>

</body>
</html>