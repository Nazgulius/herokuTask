<?php

include 'post.php';
include 'formSite.php';

//include 'profil.php';
$_SESSION['login'] = isset($_SESSION['login']) ? $_SESSION['login'] : 'Имя не задано.'; 

echo 'Имя пользоваетля: ' . $_SESSION['login'] . '<br/>';
//session_unset();

if (!empty($_SESSION['login'])) { 
    echo 'Привет ' . $_SESSION['login'] . '!<br/>';
    header('Location: ./exit.php');
    exit();
} else {
    exit();
}