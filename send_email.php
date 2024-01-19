<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the message from the POST data
    $message = $_POST["message-text"];

    // Replace 'your_email@example.com' with your actual email address
    $to = "10vivekkumaryadav@gmail.com";
    $subject = "New Message from Website";

    // You can customize the email body as needed
    $body = "Message: $message";

    // Send the email
    mail($to, $subject, $body);

    // Optionally, you can send a response back to the JavaScript code
    echo "Email sent successfully!";
}

?>
