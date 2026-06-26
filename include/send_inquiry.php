<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST["subject"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Check if fields are not empty
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Email recipient
        $to = "info@iasofttech.com.my";
        $email_subject = "Inquiry from Website: $subject";

        // Email content
        $email_body = "You have received a new message from the website inquiry form:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Subject: $subject\n\n";
        $email_body .= "Message:\n$message\n";

        // Email headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send the email
        if (mail($to, $email_subject, $email_body, $headers)) {
            echo "Your inquiry has been sent successfully.";
        } else {
            echo "Sorry, we couldn't send your message. Please try again later.";
        }
    } else {
        echo "All fields are required. Please fill out the form completely.";
    }
} else {
    echo "Invalid request method.";
}
?>
