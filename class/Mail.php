<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
//require 'vendor/autoload.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';
require 'vendor/PHPMailer/src/Exception.php';

// Instantiation and passing `true` enables exceptions

class Mail {

    function __construct($host, $username, $password, $title, $port) {
        $this->mail = new PHPMailer(true);

        //Server settings
       // $this->mail->SMTPDebug = 4;                      // Enable verbose debug output
       // $this->mail->isSMTP();      
      // Send using SMTP
      $this->mail->isSendmail(); 
        $this->mail->Host = $host;                    // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $this->mail->Username = $username;                     // SMTP username
        $this->mail->Password = $password;                               // SMTP password
        $this->mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port = $port;
        $this->mail->setFrom($username, $title);
        $this->mail->isHTML(true);
        $this->mail->addReplyTo($username, $title);
    }

    function set_address($address, $user) {
        $this->mail->addAddress($address, $user);  // Add a recipient
    }

    function set_content($content) {
        $this->mail->Subject = $content["subject"];
        $this->mail->Body = $content["body"];
        if (isset($content["altbody"])) {
            $this->mail->AltBody = $content["altbody"];
        }
    }

    function attach() {
        $this->mail->addCC('cc@example.com');
        $this->mail->addBCC('bcc@example.com');
        // Attachments
        $this->mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    }

    function send() {
        try {
            $this->mail->send();
            echo json_encode(['mail' => true]);
        } catch (Exception $e) {
            echo json_encode(['mail' => false]);
        }
    }

}

?>
