<?php

// Start Session (only if not started)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Create Constants (only if not defined)
if (!defined('SITEURL')) {
    define('SITEURL', 'http://localhost/CRICKET-STORE/');
}

// Database Constants
if (!defined('LOCALHOST')) {
    define('LOCALHOST', 'localhost');
}

if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}

if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'cricket_store');
}

// Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

?>
