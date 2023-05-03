<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

session_start();
global $conn, $glob;

include 'db.php';
date_default_timezone_set('us/eastern');

// echo "<pre>";
// print_r($_POST);
// die;
// echo date("Y-m-d H:i:s");
function pr($data){
    echo "<pre>";
    print_r($data);
    die;
}

//pr($_POST);

function send_email($data){
    $to      = 'bzumultan0@gmail.com';
    $subject = $data['subject'];
    $message = 'Name: '.$data['name']. "\r\n". 'Email: '.$data['email']. "\r\n" .$data['phone']. "\r\n".'Message: ' .$data['message'];
    $headers = 'From: bzumultan0@gmail.com' . "\r\n" .
        'Reply-To: bzumultan0@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}

if(isset($_POST['action']) && $_POST['action'] == 'submit-form'){
    send_email($_POST);
    $sql = "INSERT INTO contact_us (`name`, `email`, `subject`, `phone`, `message`, `created_at`) VALUES ('". $_POST['name']."' ,'". $_POST['email']."','". $_POST['subject']."', '". $_POST['phone']."' , '".$_POST['message']."', '".date("Y-m-d H:i:s")."')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = 'success';
        header("location: ".$glob['contactURL']);
    }else{
        echo $_SESSION['error'] = 'error';
    }
}


?>