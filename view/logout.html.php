<?php

if ($_SESSION['connected'] == '1') {
    session_destroy();
    $referer = $_SERVER['HTTP_REFERER'] ?? 'home.php';
    header('LOCATION:'.$referer);
}