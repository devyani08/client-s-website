<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform any additional validation or processing here

    // Example: Sending an email
    $to = "info@gvminstitute.org.in";
    $subject = "Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message . "\n";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed!";
    }
}
?>
