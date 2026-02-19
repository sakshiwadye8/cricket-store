<?php

// Site URL
define('SITEURL', 'https://cricket-store-2.onrender.com/');

// Database connection for TiDB Cloud

$conn = mysqli_init();

// Enable SSL (recommended for TiDB)
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Connect to TiDB
mysqli_real_connect(
    $conn,
    "gateway01.ap-southeast-1.prod.aws.tidbcloud.com", // Host
    "2DszSUbPUgJhoMQ.root",                            // Username
    "7I6XwHVtSfFHFkYu",                                // Password
    "cricket_store",                                   // Database
    4000,                                              // Port
    NULL,
    MYSQLI_CLIENT_SSL
);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
