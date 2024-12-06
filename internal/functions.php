<?php

if ($production) {
    $allowedClipVerseDomains = ['clipverse.pw'];
} else if ($debug) {
    $allowedClipVerseDomains = ['localhost', 'clipverse.pw', 'clipverse.flowerz.lol'];
} else if ($beta) {
    $allowedClipVerseDomains = ['localhost'];
} else {
    $allowedClipVerseDomains = ['clipverse.pw', 'clipverse.flowerz.lol'];
}

$currentDomain = $_SERVER['HTTP_HOST'];

if (!in_array($currentDomain, $allowedClipVerseDomains)) {
    die("skidder no skidding");
}

$botUserAgents = ['Googlebot', 'Bingbot', 'Slurp', 'curl', 'python', 'wget'];

$userAgent = $_SERVER['HTTP_USER_AGENT'];

foreach ($botUserAgents as $bot) {
    if (stripos($userAgent, $bot) !== false) {
        header('HTTP/1.1 403 Forbidden');
        echo "fuck u web crawlers";
        exit;
    }
}

$timeLimit = 60;  
$requestLimit = 50;  

$ip = $_SERVER['REMOTE_ADDR'];  

if (!isset($_SESSION['requests'])) {
    $_SESSION['requests'] = [];
}

$_SESSION['requests'] = array_filter($_SESSION['requests'], function ($timestamp) use ($timeLimit) {
    return $timestamp > time() - $timeLimit;
});

if (count($_SESSION['requests']) >= $requestLimit) {
    header('HTTP/1.1 429 Too Many Requests');
    echo "too many requests, try again in 60 seconds";
    exit;
}

$_SESSION['requests'][] = time();

?>

