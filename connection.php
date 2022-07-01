<?php
require_once __DIR__ ."/vendor/autoload.php";
$client = (new MongoDB\Client)->lab->client;
$seanse = (new MongoDB\Client)->lab->session;
?>