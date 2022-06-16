<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$pdo = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM registration WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
    $_SESSION['verification'] = "Неверный логин или пароль";
    header("Location: /lessons/task_16.php");
    exit;
}


if (!password_verify($password, $user['password'])) {
    $_SESSION['verification'] = "Неверный логин или пароль";
    header("Location: /lessons/task_16.php");
    exit;
}


$_SESSION['user'] = [
    "email" => $user['email'],
    "id" => $user['id']
];

$_SESSION['email'] = $email;

header("Location: /lessons/task_17.php");