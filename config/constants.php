<?php

// Start Session (only if not started)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Create Constants (only if not defined)
define('LOCALHOST', 'gateway01.ap-southeast-1.prod.aws.tidbcloud.com');
define('DB_USERNAME', '3RnCJM8nYe7PLXW.root');
define('DB_PASSWORD', 'fYv5wyj3Lzxfsfbq');
define('DB_NAME', 'test'); // or your db name

// Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 4000);
 or die(mysqli_error());
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

?>
