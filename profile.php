<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: ./');
    }
    $connect = mysqli_connect('localhost', 'root', 'root', 'auth_crud');
    $goods = mysqli_query($connect, "SELECT * FROM `goods`");
    $goods = mysqli_fetch_all($goods);
?>

<!doctype html>
<head lang="ua">
    <meta charset="UTF-8">
    <title>Товари користувача</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/crud.css">
</head>
<body>

<!--    <form>-->
<!--        <h2 style="margin: 10px 0;">--><?//= $_SESSION['user']['name'] ?><!--</h2>-->
<!--        <a href="#">--><?//= $_SESSION['user']['email'] ?><!--</a>-->
<!--        <a href="includes/logout.php" class="logout">Вихід</a>-->
<!--    </form>-->

    <table>
        <tr>
            <th>id</th>
            <th>Назва</th>
            <th>Опис</th>
            <th>Ціна</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
            foreach ($goods as $item){
                ?>
                    <tr>
                        <td><?= $item[0] ?></td>
                        <td><?= $item[1] ?></td>
                        <td><?= $item[2] ?></td>
                        <td><?= $item[3] ?></td>
                        <td><a href="update.php?id=<?= $item[0] ?>">Оновити</a></td>
                        <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Удалити</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h2>Додати новий товар</h2>
    <form action="vendor/create.php" method="post">
        <p>Назва</p>
        <input type="text" name="titles">
        <p>Опис</p>
        <textarea name="descriptions"></textarea>
        <p>Ціна</p>
        <input type="number" name="prices">
        <button type="submit">Додати</button>
    </form>

</body>
</html>
