<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendors/phpmailer/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = localhost;                      // Specify main and backup SMTP servers
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // $mail->Username = 'exampletest469@gmail.com';         // SMTP username
    // $mail->Password = 'qwerty12#$%';                      // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('exampletest469@gmail.com');
    $mail->addAddress('exampletest469@gmail.com');     // Add a recipient

    if(isset($_POST['type']) && $_POST['type'] == "query"){

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['subject'];

        $email = $_POST['email'];
        $message = $_POST['message'];

        $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
        $body .= "<table style='width: 100%;'>";
        $body .= "<tbody>";
        $body .= "<tr><td style='border:none;'><strong>Email:</strong> {$email}</td></tr>";
        $body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong> {$message}</td></tr>";
        $body .= "</tbody></table>";
        $body .= "</body></html>";  
        
    } else {

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Contact Us Form Response";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
        $body .= "<table style='width: 100%;'>";
        $body .= "<tbody>";
        $body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
        $body .= "<tr><td style='border:none;'><strong>Email:</strong> {$email}</td></tr>";
        $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr><br>";
        $body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong> {$message}</td></tr>";
        $body .= "</tbody></table>";
        $body .= "</body></html>";
    
    }
    
    $mail->Body = $body;
    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>
