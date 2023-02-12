<?php
    session_start();
    if ($_SESSION['user']){
        header('Location: ./profile.php');
    }
?>
<!doctype html>
<head lang="ua">
    <meta charset="UTF-8">
    <title>Авторизація і Реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="includes/signup.php" method="post">
        <label for="">Імя</label>
        <input type="text" name="name" placeholder="Введіть імя">
        <label for="">Логін</label>
        <input type="text" name="login" placeholder="Введіть логін">
        <label for="">Пошта</label>
        <input type="email" name="email" placeholder="Введіть пошту">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label for="">Підтвердження Пароля</label>
        <input type="password" name="password_confirm" placeholder="Введіть пароль повторно">
        <button type="submit">Зайти</button>
        <p>
            У вас вже є акаунт? - <a href="./">Авторизація</a>
        </p>
        <?php
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>

</body>
</html>
