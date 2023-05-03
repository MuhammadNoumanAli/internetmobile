<?php
require 'vendor/autoload.php';

$speedtest = new NextpostTech\Speedtest\Speedtest();
print_r($speedtest);
die;
$speedtest->getServers();
$speedtest->getBestServer();
$speedtest->download();
$speedtest->upload();

$results = $speedtest->results();

print_r($results);