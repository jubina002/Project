<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pet = $_POST['pet'];
    $message = $_POST['message'];

    // Compose email message
    $to = "your_email@example.com"; // Change this to your email address
    $subject = "New Adoption Request";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Pet: $pet\n";
    $message .= "Message: $message\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "<p>Thank you for your interest! We will contact you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request. Please submit the form.</p>";
}
?>