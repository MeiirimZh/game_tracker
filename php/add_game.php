<?php
    $game_name = $_POST['gamename'];
    $genre_id = intval($_POST['genre']);
    $rating = intval($_POST['rating']);

    $username = $_COOKIE['user'];

    $conn = new mysqli('localhost', 'root', '', 'game_tracker');

    if ($conn->connect_error) {
        die(''. $conn->connect_error);
    }

    $stmt = $conn->prepare('SELECT user_id FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_id = intval($result->fetch_assoc()['user_id']);

    $stmt = $conn->prepare('INSERT INTO games (game_name, genre_id, rating, user_id) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('siii', $game_name, $genre_id, $rating, $user_id);
    $stmt->execute();

    header("Location: ../index.php");
    exit;
