<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate the form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Send the email
    $to = "terdesjosefelipe@gmail.com";  // Replace with your email address
    $subject = "New message from $name";
    $body = "You have received a new message from $name ($email):\n\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending message. Please try again later.";
    }
}
?>