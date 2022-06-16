<?php
//session_start();
//
//$email = $_POST['email'];
//$password = $_POST['password'];
//
//$pdo = new PDO('mysql:host=localhost;dbname=my_project', 'root', '');
//
//$sql = "SELECT * FROM registration WHERE email=:email";
//$statement = $pdo->prepare($sql);
//$statement->execute(['email' => $email]);
//$user = $statement->fetch(PDO::FETCH_ASSOC);
//
//if (!empty($user)) {
//    $_SESSION['error'] = "Этот эл адрес уже занят другим пользователем";
//    header("Location: /lessons/task_13.php");
//    exit;
//
//}
//
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
//$sql = "INSERT INTO registration (email, password) VALUES (:email, :password)";
//$statement = $pdo->prepare($sql);
//$statement->execute(['email' => $email, 'password' => $hashed_password]);
//
//header("Location: /lessons/task_13.php");
