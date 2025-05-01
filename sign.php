<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tracker</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
        require_once "blocks/header.html";
    ?>
    <main>
        <form name="sign-up" action="" method="POST" class="sign-up-form" onsubmit="return validateForm()">
            <h2 class="form-title">Регистрация</h2>
            <h3 class="form-error"></h3>
            <h3>Имя пользователя</h3>
            <input type="text" name="username">
            <h3>Почта</h3>
            <input type="email" name="email">
            <h3>Пароль</h3>
            <input type="password" name="password">
            <h3>Повторите пароль</h3>
            <input type="password" name="repeat_password">
            <input type="submit" value="Подтвердить">
        </form>
        <form action="" method="POST" class="sign-in-form">
            <h2 class="form-title">Вход</h2>
            <h3>Почта</h3>
            <input type="email" name="email">
            <h3>Пароль</h3>
            <input class="sigin-in-form__submit" type="password" name="password">
            <input type="submit" value="Подтвердить">
        </form>
        <button class="changeFormBtn" onclick="changeForm()">Зарегистрироваться</button>
    </main>

    <script src="js/form.js"></script>
</body>
</html>