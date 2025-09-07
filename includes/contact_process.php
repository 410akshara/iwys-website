<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize input
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Your email where messages will be sent
    $to = "info@iwys.com"; // <-- replace with your real email

    // Email subject
    $mail_subject = "New Contact Form Message: " . ($subject ?: "No Subject");

    // Email body
    $mail_body = "You received a new message from your website contact form:\n\n";
    $mail_body .= "Name: $name\n";
    $mail_body .= "Email: $email\n";
    $mail_body .= "Subject: $subject\n";
    $mail_body .= "Message:\n$message\n";

    // Email headers
    $headers  = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $mail_subject, $mail_body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.'); window.location.href='contact.php';</script>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>
