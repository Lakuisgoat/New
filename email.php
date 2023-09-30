<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "yuktimoondraa@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect back to the HTML form after sending
    header("Location: index.html");
    exit;
}
?>
