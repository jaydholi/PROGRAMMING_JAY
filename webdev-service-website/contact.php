<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $interest = filter_var($_POST['interest'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if (!$email) {
        echo "Invalid email address";
        exit;
    }

    $to = "developer.jay20@gmail.com";
    $subject = "New Contact Form Submission";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Interest: $interest\n";
    $email_content .= "Message:\n$message\n";

    // Use a from email that belongs to your domain
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>alert('Message sent successfully.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message.'); window.history.back();</script>";
    }
}
?>
