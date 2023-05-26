<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $to = 's2206748@student.hb.se,s2207369@student.hb.se';
   $subject = 'New Contact Form Submission';
   $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

   if (mail($to, $subject, $body)) {
      echo '<p>Thank you for contacting us. We will get back to you soon.</p>';
   } else {
      echo '<p>Oops! An error occurred. Please try again later.</p>';
   }
}
?>
