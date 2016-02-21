<?php
class MailSender {

    var $whomeTosend;
    var $sender;
    var $subject;
    var $body;


    function  sendMail($whome,$sender,$subject,$body) {
        $this->whomeTosend = $whome;
        $this->sender = $sender;
        $this->subject = $subject;
        $this->body = $body;

        date_default_timezone_set('Etc/UTC');
        require '../PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
//Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
        $mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "wce.wlugclub@gmail.com";
//Password to use for SMTP authentication
        $mail->Password = "WLUGadmin@123";
//Set who the message is to be sent from
        $mail->setFrom('mahadev.wce@gmail.com', 'Mahadev Vyavahare');
//Set an alternative reply-to address
        $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
        $mail->addAddress('mahadev@thoughtworks.com', 'Maddy');
//Set the subject line
        $mail->Subject = 'Test Mail';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
        $mail->AltBody = 'Testing WLUG mail Service...';
//Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }

    }
}
?>