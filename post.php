<?php
declare(strict_types=1);

session_start();

$_SESSION['login'] = isset($_SESSION['login']) ? $_SESSION['login'] : 'Имя не задано.'; 

if (!empty($_POST['login'])) {  
    $_SESSION['login'] = $_POST['login'];
    header('Location: /index.php');
    exit();
} 