
<?php

// Database Constants
define('LOCALHOST', 'gateway01.ap-southeast-1.prod.aws.tidbcloud.com');
define('DB_USERNAME', '3RnCJM8nYe7PLXW.root');
define('DB_PASSWORD', 'fYv5wyj3Lzxfsfbq');
define('DB_NAME', 'test'); // or your db name

// Create connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 4000);

// Check connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>
