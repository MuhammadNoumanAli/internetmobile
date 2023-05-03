<?php
if($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR'] == "::1"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "internetmobile";
    $glob['webURL']    = 'http://internetlive.com';
    $glob['contactURL']    = 'http://internetlive.com/contact-us';
} else {
    $servername = "localhost";
    $username = "epiz_34085910";
    $password = "8NgvHComSET";
    $db = "epiz_34085910_internetmobile";
    $glob['webURL']    = 'https://internetmobile.epizy.com';
    $glob['contactURL']    = 'https://internetmobile.epizy.com/contact-us';
}


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>