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

    <form action="includes/signin.php" method="post">
        <label for="">Логін</label>
        <input type="text" name="login" placeholder="Введіть логін">
        <label for=""Пароль></label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit">Зайти</button>
        <p>
            У вас немає акаунта? - <a href="./register.php">Зареєструватись</a>
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
