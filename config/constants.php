<?php

// Database Constants
define('LOCALHOST', 'gateway01.ap-southeast-1.prod.aws.tidbcloud.com');
define('DB_USERNAME', '3RnCJM8nYe7PLXW.root');
define('DB_PASSWORD', 'fYv5wyj3Lzxfsfbq');
define('DB_NAME', 'test'); // or your db name

// Create connection with SSL
$conn = mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

mysqli_real_connect(
    $conn,
    LOCALHOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    4000,
    NULL,
    MYSQLI_CLIENT_SSL
);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

