<?php

// ===== SITE URL =====
define('SITEURL', 'https://cricket-store-2.onrender.com/');


// ===== DATABASE CONNECTION (TiDB Cloud) =====

// Create connection
$conn = mysqli_init();

// Enable SSL (required for TiDB Cloud)
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Connect to TiDB Cloud database
mysqli_real_connect(
    $conn,
    "gateway01.ap-southeast-1.prod.aws.tidbcloud.com", // Host
    "2DszSUbPUgJhoMQ.root",                            // Username
    "7I6XwHVtSfFHFkYu",                                // Password
    "cricket_store",                                   // Database name
    4000,                                              // Port
    NULL,
    MYSQLI_CLIENT_SSL
);

// Check connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>
