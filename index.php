<?php
    echo"Hello";
$uri=urldecode(
    parse_url($_SERVER["Request_URI"],PHP_URL_PATH)
);
if($uri!=='/' && file_exists(__DIR__.'/public'.$uri)){
    return false;
}

require_once __DIR__.'/public/index.php';
