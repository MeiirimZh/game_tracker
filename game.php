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
        <form action="php/add_game.php" method="POST">
            <h2 class="form-title">Добавить игру</h2>
            <h3>Название игры</h3>
            <input type="text" name="gamename">
            <h3>Жанр</h3>
            <select name="genre">
                <option value="1">Экшен</option>
                <option value="2">Платформер</option>
                <option value="3">Аркада</option>
                <option value="4">Rogue-like</option>
                <option value="5">RPG</option>
                <option value="6">Стратегия</option>
                <option value="7">Драки</option>
                <option value="8">Ужасы</option>
                <option value="9">Головоломки</option>
            </select>
            <h3>Оценка</h3>
            <input type="text" name="rating">
            <input type="submit" value="Подтвердить">
        </form>
    </main>

    <script src="js/redirect.js"></script>
</body>
</html>