<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = 'info@dhakaconsulting.com'; // The business email - replace as needed
        $subject = 'New Contact Form Submission';
        $emailContent = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
        $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

        if (mail($to, $subject, $emailContent, $headers)) {
            header('Location: contact.php?success=1');
            exit;
        } else {
            header('Location: contact.php?error=1');
            exit;
        }
    } else {
        header('Location: contact.php?error=1');
        exit;
    }
} else {
    header('Location: contact.php');
    exit;
}
?>