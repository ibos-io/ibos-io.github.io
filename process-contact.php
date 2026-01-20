<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    $errors = [];

    if (!$name) {
        $errors[] = "Name is required.";
    }
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (!$subject) {
        $errors[] = "Subject is required.";
    }
    if (!$message) {
        $errors[] = "Message is required.";
    }

    if (count($errors) === 0) {
        $to = "contact@zunoks.com";  // Placeholder email address
        $email_subject = "New Contact Form Message: " . $subject;
        $email_body = "You have received a new message from the contact form on your website.

" .
            "Name: $name
" .
            "Email: $email
" .
            "Subject: $subject
" .
            "Message:
$message
";

        $headers = "From: $email\r\n" .
            "Reply-To: $email\r\n" .
            "X-Mailer: PHP/" . phpversion();

        if (mail($to, $email_subject, $email_body, $headers)) {
            header("Location: contact.php?success=1");
            exit;
        } else {
            $errors[] = "There was an error sending your message. Please try again later.";
        }
    }
} else {
    $errors[] = "Invalid request method.";
}

if (!empty($errors)) {
    session_start();
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header("Location: contact.php?error=1");
    exit;
}
?>