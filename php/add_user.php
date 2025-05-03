<?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost", "root", "", "game_tracker");
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    setcookie("user", $username, time() + 86400 * 30, "/");

    header("Location: ../index.php");
    exit;
