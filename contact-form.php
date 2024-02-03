<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

    $to = "abadkhan5438@gmail.com"; // Replace with your actual email address
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $comments";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

}
?>
