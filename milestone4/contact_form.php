<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    // Here you can process the form data, such as sending an email or storing it in a database
    // For example, to send an email:
    $to = "rccgjesushousefargond@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "First Name: $firstName\nLast Name: $lastName\nPhone Number: $phoneNumber\nMessage: $message";
    
    // Send email
    mail($to, $subject, $body);

    // Redirect back to event.php
    header("Location: event.php");
    exit();
}
?>