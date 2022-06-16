<?php
session_start();

unset($_SESSION['email']);

header("Location: /lessons/task_16.php");