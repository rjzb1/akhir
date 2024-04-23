<?php

session_start();

if (!isset($_COOKIE['user_log'])) {
    header("Location: index.php");
}

if (isset($_GET['logout'])) {
    user_logout();
}

function user_logout() {
    setcookie("user_log", "", time() - 3600, "/");
    header("Location: index.php");
}
?>