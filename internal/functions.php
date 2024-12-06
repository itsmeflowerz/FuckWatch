<?php

if ($production) {
    $allowedClipVerseDomains = ['clipverse.pw']; 
} else 
if ($debug) {
    $allowedClipVerseDomains = ['localhost', 'clipverse.pw', 'clipverse.flowerz.lol']; 
} else 
if ($beta) {
    $allowedClipVerseDomains = ['localhost']; 
} else {
    $allowedClipVerseDomains = ['clipverse.pw', 'clipverse.flowerz.lol']; 
}

?>