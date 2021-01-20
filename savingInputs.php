<?php

session_start();

$_SESSION['userName'] = $_POST['userName'];
$_SESSION['password'] = $_POST['password'];

header("Location: baseLogged.php");




 ?>
