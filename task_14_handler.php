<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");

$sql ="INSERT INTO table_input (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

$_SESSION['text'] = $text;


header("Location: /lessons/task_14.php");