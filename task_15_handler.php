<?php
session_start();

$_SESSION['numb'] = (int) $_SESSION['numb'] + 1;

header("Location: /lessons/task_15.php");
