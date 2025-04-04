<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'suryatejaperiketi570@gmail.com';
    $mail->Password = 'qpnbwrhhoaoflsnf';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->addAddress("goutamhospitalshyd@gmail.com");

    $mail->setFrom($email, $name);

    $mail->isHTML(true);

    $mail->Subject = 'Contact Form Submition Details';
    // $mail->Body = $message;
    $mail->Body = "<html>
    <body>
    <h3>Contact Form</h3>
    <h4>Name : $name</h4>
    <p>Email : $email</p>
    <p>Subject : $subject</p>
    <p>Message : $message</p>
    <p>Contact Number : <b>$phone</b></p>
    </body>
    </html>";


    $mail->send();

    echo
    "
    <script>
    alert('Contact form submited Successfully');
    document.location.href = 'index.php';
    </script>
    ";
}
else {
    echo "Error: " . $mail->ErrorInfo;
}
?>