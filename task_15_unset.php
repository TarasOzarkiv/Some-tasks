<?php
session_start();
unset($_SESSION['numb']);
$_SESSION['numb'] = (int) $_SESSION['numb'];

header("Location: /lessons/task_15.php");
