<?php
declare(strict_types=1);
session_start();

if (session_destroy()) {
    header('Location: /index.php');
   // header('Refresh: 2;url=index.php');
} else {
    echo 'Сессия не очистилась.';
}