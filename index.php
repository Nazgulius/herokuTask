<?php
declare(strict_types=1);
session_start();

if (empty($_SESSION['login'])) { 
    include 'formSite.php';
} else{
    echo 'Привет ' . $_SESSION['login'] . '!<br/>';
  //  require 'exit.php';
  //  header('Refresh: 2;url=exit.php');
}