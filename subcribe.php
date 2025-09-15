<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    // 👇 Replace with your email
    $to      = "kskconstructionsandinteriors@gmail.com";  

    $subject = "New Contact Form Message from " . $name;
    $body    = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message sent successfully!";
    } else {
        echo "❌ Message delivery failed!";
    }
}
?>
