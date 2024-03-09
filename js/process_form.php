<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate and sanitize inputs (you should implement this according to your needs)

    // Email configuration
    $to = "kesavakumar.sivalingam@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Additional headers for better email deliverability
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $body, $headers);

    // Redirect the user after successful submission (you may customize this URL)
    header("Location: thank_you.html");
    exit();
}
?>
