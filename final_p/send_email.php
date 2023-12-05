<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user_name"];
    $email = $_POST["user_email"];
    $message = $_POST["user_message"];

    // Create the email content
    $to = "sasquatchmayhem@sasquatchmayhem.com";
    $subject = "New Bigfoot Encounter Submission";
    $headers = "From: $email";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_content, $headers);
}
?>
