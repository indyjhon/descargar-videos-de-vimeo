<?php
// Setting up the time zone
date_default_timezone_set('America/Lima');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'mokodownload';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

// Defining base url, you must end with a slash "/"
define("BASE_URL", "http://localhost/mokodownload%202.0/mokodownload/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

//the journey into the database begins here, hop in :)
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
    echo "Connection error :" . $excepiton->getMessage();
}
?>