<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Example: store in a file or connect to database
  $to = "youremail@example.com";
  $subject = "New Contact Message";
  $body = "From: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "<script>alert('Message sent successfully!'); window.location='contact.php';</script>";
  } else {
    echo "<script>alert('Error sending message.'); window.location='contact.php';</script>";
  }
}
?>
