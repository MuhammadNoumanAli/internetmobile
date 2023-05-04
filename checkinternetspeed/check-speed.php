<?php

require 'vendor/autoload.php';

$speedtest = new NextpostTech\Speedtest\Speedtest();
$speedtest->getServers();
$speedtest->getBestServer();
$speedtest->download();
$speedtest->getUpload();

$results = $speedtest->results();

echo "<pre>";
print_r($results);