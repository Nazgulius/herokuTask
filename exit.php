<?php
declare(strict_types=1);
session_start();

if (session_destroy()) {
    header('Location: /index.php');
} else {
    echo 'Сессия не очистилась.';
    header('Refresh: 5;url=index.php');
}