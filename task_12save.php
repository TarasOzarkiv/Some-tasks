<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");

$sql = "SELECT * FROM table_input WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
    $message = "You should check in on some of those fields below.";
    $_SESSION['message'] = $message;

    header("Location: /lessons/task_12.php");
    exit;
}

    $sql = "INSERT INTO table_input (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);

    header("Location: /lessons/task_12.php");
