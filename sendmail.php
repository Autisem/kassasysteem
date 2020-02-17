<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader and load all required php files
require '..\vendor\autoload.php';

function SendMail($mailAdress, $userName, $subject, $mailBody, $altMailBody, $attachment)
{

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                          // Enable verbose debug output
        $mail->isSMTP();                                                // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                           // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                       // Enable SMTP authentication
        $mail->Username   = 'daanisaanwezigdev@gmail.com';              // SMTP username
        $mail->Password   = 'projectBioscoop';                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 25;                                         // TCP port to connect to

        //Recipients
        $mail->setFrom('daanisaanwezigdev@gmail.com', 'Bioscoop AMO');
        $mail->addAddress($mailAdress, $userName);       // Add a recipient
        //$mail->addAddress('ellen@example.com');                       // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        if(isset($attachment))
        {
            $mail->addAttachment($attachment);                          //add a attachment to the mail
            //$mail->addAttachment('/var/tmp/file.tar.gz');             // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');            // Optional name
        }

        // Content
        $mail->isHTML(true);                                            // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "$mailBody";
        $mail->AltBody = "$altMailBody";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>

<!-- php mailer (library) -->

<!-- mailtrap.io (free smtp server) -->