<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
    
        // Set the recipient email address
        $to = "shaifur999@gmail.com";
    
        // Build the email message
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Subject: $subject\n";
        $email_message .= "Message:\n$message";
    
        // Set additional headers
        $headers = "From: $email";
    
        // Send the email
        mail($to, $subject, $email_message, $headers);
    
        // Redirect to a thank you page or display a success message
        header("Location: index.html");
        exit();
    }
    ?>