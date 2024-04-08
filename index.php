<?php
declare(strict_types=1);
session_start();

include 'aboutMe.html';

if (empty($_SESSION['login'])) { 
    include 'formSite.html';
} else{
    echo 'Привет ' . $_SESSION['login'] . '!<br/><br>';
    echo "<a href='exit.php'><button type='submit'>Выйти</button></a>";
}