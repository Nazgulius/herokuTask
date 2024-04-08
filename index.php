<?php
declare(strict_types=1);
session_start();

if (empty($_SESSION['login'])) { 
    include 'formSite.php';
} else{
    echo 'Привет ' . $_SESSION['login'] . '!<br/>';
    echo "<a href='exit.php'><button type='submit'>Выйти</button></a>";
  
}