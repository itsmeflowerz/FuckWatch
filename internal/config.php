<?php

$site_url = 'clipverse.pw';
$site_name = 'ClipVerse';
$site_slogan = 'Im gonna kill myself';
$site_lightlogo = '/assets/img/temporary_logo_light.png';
$site_darklogo = '/assets/img/temporary_logo_dark.png';
$site_placeholderthumbnail = '/content/thumbnails/temporary_placeholder_thumbnail.png';
$site_placeholderpfp = '/content/pfp/temporary_placeholder_pfp.png';

$debug = true;
$beta = true;
$production = false;

$sql_dbuser = 'root';
$sql_dbpass = '';
$sql_dbname = 'fuckwatch';

?>

<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', $sql_dbname);
define('DB_USER', $sql_dbuser);
define('DB_PASS', $sql_dbpass);

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    if ($debug) {
        echo "connection failed, contact @itsmeflowerz or @charlachilla on discord";
    } else {
        error_log("connection failed, contact @itsmeflowerz or @charlachilla on discord");
        die("connection failed, contact @itsmeflowerz or @charlachilla on discord");
    }
}

require 'functions.php'; 

?>
