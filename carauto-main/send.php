<?php

session_start();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['submitContact'])) {

    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $vehicle = $_POST['vehicle'];
        $message = $_POST['message'];
        $image = $_FILES['image']['tmp_name'];


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'puneet6152@gmail.com';                     //SMTP username
            $mail->Password   = 'lymompifzgsaotcf';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('puneet6152@gmail.com', 'PS');
            $mail->addAddress('puneet6152@gmail.com', 'Joe User');     //Add a recipient
            $mail->addAttachment($image, 'Demo_Files/Image.jpg');
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'There is a new Message from your SpeedX website!</b>
                    <h4>Name:'.$name.'</h4>
                    <h4>Email:'.$email.'</h4>
                    <h4>Phone:'.$tel.'</h4>
                    <h4>Vehicle Info:'.$vehicle.'</h4>
                    <p>Message:'.$message.'</p>
    ';
            if ($mail->send()) {

                $_SESSION['status'] = "We will contact you within 24 hours";
                header("Location:{$_SERVER["HTTP_REFERER"]}");
                exit(0);
            } else {
                $_SESSION['status'] = "Message could not be sent.Mailer error:{$email->ErrorInfo}";
                header("Location:{$_SERVER["HTTP_REFERER"]}");
                exit(0);
            }
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $vehicle = $_POST['vehicle'];
        $message = $_POST['message'];
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'puneet6152@gmail.com';                     //SMTP username
            $mail->Password   = 'lymompifzgsaotcf';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('puneet6152@gmail.com', 'PS');
            $mail->addAddress('puneet6152@gmail.com', 'Joe User');     //Add a recipient
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'There is a new Message from your SpeedX website!</b>
                        <h4>Name:'.$name.'</h4>
                        <h4>Email:'.$email.'</h4>
                        <h4>Phone:'.$tel.'</h4>
                        <h4>Vehicle Info:'.$vehicle.'</h4>
                        <p>Message:'.$message.'</p>
        ';

            if ($mail->send()) {

                $_SESSION['status'] = "We will contact you within 24 hours";
                header("Location:{$_SERVER["HTTP_REFERER"]}");
                exit(0);
            } else {
                $_SESSION['status'] = "Message could not be sent.Mailer error:{$email->ErrorInfo}";
                header("Location:{$_SERVER["HTTP_REFERER"]}");
                exit(0);
            }
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


} else {
    header('Location:404.php');
    exit(0);
}