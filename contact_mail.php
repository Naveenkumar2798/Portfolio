<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/Exception.php';

// Check if the contact form was submitted
if (isset($_POST['contact'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    try {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        
        // Server settings for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'naveenarjun.webdesigner@gmail.com';
        $mail->Password = 'rlxf rpyr nyze rcgf';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email to yourself (notification)
        $mail->setFrom('naveenarjun.webdesigner@gmail.com', 'Portfolio Contact Form');
        $mail->addAddress('naveenarjun.webdesigner@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<h3>Contact Form Submission</h3>
                       <p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Message:</strong><br>$message</p>";

        $mail->send();
        
        // Reset for the second email
        $mail->clearAddresses();
        $mail->clearAttachments();
        
        // Email to the user (acknowledgment)
        $mail->setFrom('naveenarjun.webdesigner@gmail.com', 'Naveen Kumar K');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for contacting me';
        $mail->Body = "<h3>Dear $name,</h3>
                      <p>Thank you for reaching out to me through my portfolio website. I have received your message and will get back to you as soon as possible.</p>
                      <p>Best regards,<br>Naveen Kumar K</p>";

        $mail->send();
        
        echo "<script>alert('Thank you for your message. I will contact you soon!'); </script>";
    } catch (Exception $e) {
        echo "<script>alert('Email Failed: {$mail->ErrorInfo}');</script>";
    }
}
?>