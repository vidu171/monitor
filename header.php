<?php
session_start();
include 'config.php';

if (empty($_SESSION['username'])) {
    header('Location: ' . "./login.php", true, ($permanent === true) ? 301 : 302);
}

?>