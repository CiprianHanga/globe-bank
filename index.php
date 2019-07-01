<?php

if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
// echo 'hello din globe-bank';
header('Location: '.$uri.'/work/globe-bank/public/');
exit;

?>
Something went terribly wrong... :-(