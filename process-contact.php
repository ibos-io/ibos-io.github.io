<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = strip_tags(trim($_POST["name"] ?? ""));
    $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"] ?? ""));
    $message = strip_tags(trim($_POST["message"] ?? ""));

    if (empty($name) || empty($email) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=1");
        exit;
    }

    $to = "info@zunoksconsulting.com"; // Replace with actual recipient email
    $email_subject = "New Contact Message: " . $subject;
    $email_body = "You have received a new message from the contact form on your website." . "\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Subject: $subject\n" .
                  "Message:\n$message";
    
    $headers = "From: noreply@zunoksconsulting.com\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.php?success=1");
    } else {
        header("Location: contact.php?error=1");
    }
    exit;
} else {
    header("Location: contact.php");
    exit;
}
?>