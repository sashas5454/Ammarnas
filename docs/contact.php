<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $to = "s2206748@student.hb.se, s2207369@student.hb.se";  
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>


