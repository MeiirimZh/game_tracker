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
                $conn = new mysqli('localhost', 'root', '', 'game_tracker');

                if ($conn->connect_error) {
                    die(''. $conn->connect_error);
                }

                $username = $_COOKIE['user'];
                $stmt = $conn->prepare('SELECT user_id FROM users WHERE username = ?');
                $stmt->bind_param('s', $username);
                $stmt->execute();
                $result = $stmt->get_result();
                $user_id = intval($result->fetch_assoc()['user_id']);

                $stmt = $conn->prepare('SELECT COUNT(*) AS games_count FROM games WHERE user_id = ?');
                $stmt->bind_param('i', $user_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $games_count = intval($result->fetch_assoc()['games_count']);
    
                for ($i = 0; $i < $games_count; $i++) {
                    require "blocks/card.html";
                }
            ?>
        </div>
    </main>

    <script src="js/redirect.js"></script>
    <script src="js/main.js"></script>
    <script src="js/loadGames.js"></script>
</body>
</html>