<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "ashispalrony@gmail.com";
    $subject = "Contact Form Submission from $fullname";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you for contacting us. Your message has been sent.";
    } else {
        // Error sending the email
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Form was not submitted properly
    echo "Form submission failed. Please try again.";
}
?>
