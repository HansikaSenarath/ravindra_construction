<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address where you want to receive the message
    $to = 'ravindraconstruction08@gmail.com';

    // Email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Send email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
} else {
    // If the request method is not POST, redirect back to the contact page
    header("Location: contact.html");
    exit();
}
?>
