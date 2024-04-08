<?php
declare(strict_types=1);
session_start();

if (!empty($_POST['login'])) {  
    $_SESSION['login'] = $_POST['login'];
    header('Location: /index.php');    
} else {
    echo 'Имя не задано. Вы будете возвращены н главную страницу через 2 секунды.';
    header('Refresh: 2;url=index.php');
}
