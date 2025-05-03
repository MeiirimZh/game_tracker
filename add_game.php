<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tracker</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
        require_once "blocks/header.html";
    ?>

    <main>
        <form action="">
            <h2 class="form-title">Добавить игру</h2>
            <h3>Название игры</h3>
            <input type="text" name="">
            <h3>Жанр</h3>
            <select name="genre">
                <option value="">Экшен</option>
                <option value="">Платформер</option>
                <option value="">Аркада</option>
                <option value="">Rogue-like</option>
                <option value="">RPG</option>
                <option value="">Стратегия</option>
                <option value="">Драки</option>
                <option value="">Ужасы</option>
                <option value="">Головоломки</option>
            </select>
            <h3>Оценка</h3>
            <input type="text" name="rating">
            <input type="submit" value="Подтвердить">
        </form>
    </main>

    <script src="js/redirect.js"></script>
    <script src="js/main.js"></script>
</body>
</html>