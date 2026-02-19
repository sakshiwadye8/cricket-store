<?php

// Site URL
define('SITEURL', 'https://cricket-store-2.onrender.com/');

// Database Constants
$conn = mysqli_connect(
    "gateway01.ap-southeast-1.prod.aws.tidbcloud.com",
    "oi4z2DV1NMQGcKv.root",
    "huknkaUfLA8NavGB",
    "test",
    4000
);
);
;

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

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

}

?>

