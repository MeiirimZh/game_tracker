<?php
    header('Content-Type: application/json');
    $conn = new mysqli("localhost", "root", "", "game_tracker");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT game_name, genre_name, rating FROM games JOIN genres USING(genre_id)";
    $result = $conn->query($sql);
    $games = [];

    foreach($result as $row ) {
        $games[] = $row;
    }

    echo json_encode($games);
    $conn->close();