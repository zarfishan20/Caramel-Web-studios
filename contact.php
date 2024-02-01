<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add additional validation and sanitation here

    // Send the email (replace with your actual email sending code)
    $to = "zf.ali@ehotmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect after successful submission (replace with your desired URL)
    header("Location: contact.html");
    exit;
}
?>
