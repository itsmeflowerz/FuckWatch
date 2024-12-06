<?php

$site_url = 'localhost';
$site_name = 'FuckWatch';
$site_slogan = 'Wow, this shit sucks!';
$site_logo = 'I havent made one yet';

$debug = true;
$beta = true;

$sql_dbuser = 'root';
$sql_dbpass = '';
$sql_dbname = 'fuckwatch';

?>

<?php

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

?>
