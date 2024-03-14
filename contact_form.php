<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];
    
    // Basic validation
    if (empty($name) || empty($email) || empty($phone_number) || empty($message)) {
        $_SESSION['error'] = "All fields are required";
        header("Location: contract.php");
        exit();
    }
    
    // Here you can include PHPMailer and send the email
    // Let me know if you want me to help with PHPMailer integration.
    
    // For now, let's assume the form submission is successful
    $_SESSION['status'] = "Your message has been sent, Thank you.. will get to you as soon as the message is received.";
} else {
    $_SESSION['error'] = "Invalid request";
    header("Location: contract.php");
    exit();
}
?>
