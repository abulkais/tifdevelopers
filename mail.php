<?php

if (isset($_POST['form_submit'])) {
    $to = "webdeveloper.sisgain@gmail.com";
    $subject = "Enquiry From TIFDEVELOPERS";
    $from = "webdeveloper.sisgain@gmail.com";
    $name  = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    // india timezone
    date_default_timezone_set("Asia/Calcutta");

    $message = " Hi," . "\n We have received Enquiry from tifdevelopers.com - "  . "\n\n Name - "  . $name . "\n Phone - " . $number . "\n Email - " . $email . "\n Query/Location - " . $location . " \n IP Address - " . $_SERVER['REMOTE_ADDR'] . "\n Device - " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "\n Date- " . date('d-M-Y');


    $headers = "From:" . $from;

    mail($to, $subject, $message, $headers);


    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='thankyou.php';
    </SCRIPT>");
}
?>
