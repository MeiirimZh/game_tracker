<?php
    $data = json_decode(file_get_contents('php://input'), true);

    $username = $_COOKIE['user'];
    $game_name = $data['game_name'];

    $conn = new mysqli('localhost', 'root', '', 'game_tracker');
    if ($conn->connect_error) {
        die(''. $conn->connect_error);
    }

    $stmt = $conn->prepare('SELECT user_id FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_id = intval($result->fetch_assoc()['user_id']);

    $stmt = $conn->prepare('DELETE FROM games WHERE game_name = ? AND user_id = ?');
    $stmt->bind_param('si', $game_name, $user_id);
    $stmt->execute();

    exit;