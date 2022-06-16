<?php



$filename = $_GET['del'];
$delletimage = 'img/update/' . "$filename";

unlink("$delletimage");


$pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");


if (isset($_GET['del'])) {

    $id = $filename;
    $sqlDell = "DELETE FROM images WHERE  image=:image";
    $state = $pdo->prepare($sqlDell);
    $state->execute(['image' => $filename]);
    $ima = $state->fetchAll(PDO::FETCH_ASSOC);
}



header("Location: /lessons/task_19.php");
exit;