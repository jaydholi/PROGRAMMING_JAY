<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $interest = htmlspecialchars($_POST['interest']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "developer.jay20@gmail.com";
    $subject = "New Contact Form Submission";

    // Email content
    $email_content = "You have received a new message from your website contact form:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Interest: $interest\n";
    $email_content .= "Message:\n$message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>alert('Message sent successfully.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.history.back();</script>";
    }
}
?>
