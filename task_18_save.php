<?php


$size = $_FILES['filename']['size'];
$name = $_FILES['filename']['name'];
$from = $_FILES['filename']['tmp_name'];

var_dump($name);
exit;

$resultname = pathinfo($_FILES['filename']['name']);
$filename = uniqid() . "." .$resultname['extension'];

if (move_uploaded_file($from, 'img/update/'.$filename)){
    $_SESSION['image'] = $filename;
} else {
    echo 'ko';
}

$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");

$sql ="INSERT INTO images (image) VALUES (:image)";
$statement = $pdo->prepare($sql);
$statement->execute(['image' => $filename]);
$user = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Location: /lessons/task_18.php");
exit;
