<?php

for ($i=0; $i < count($_FILES['image']['name']); $i++) {
    upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}


function upload_file($filename, $tmp_name) {
    $result = pathinfo($filename);
    $filename = uniqid() . "." .$result['extension'];

    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");

    $sql ="INSERT INTO images (image) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $filename]);
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);

    move_uploaded_file($tmp_name, 'img/update/' . $filename);
}


header("Location: /lessons/task_20.php");