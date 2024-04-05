<?php

$_SESSION['login'] = 0;
if ($_SESSION['login'] === 0) {
    header('Location: /index.php');
}
exit();