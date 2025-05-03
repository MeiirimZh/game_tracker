<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tracker</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/card.css">
</head>
<body>
    <?php
        require_once "blocks/header.html";
    ?>

    <main>
        <h2 class="main__username"></h2>
        <div class="games">
            <?php
                for ($i = 0; $i < 9; $i++) {
                    require "blocks/card.html";
                }
            ?>
        </div>
    </main>

    <script src="js/redirect.js"></script>
    <script src="js/main.js"></script>
</body>
</html>