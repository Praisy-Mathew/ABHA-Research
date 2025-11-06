<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $to = "praissymathew987@gmail.com"; // where to receive the email
    $subject = "New Internship Application";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $body = "You have received a new internship application:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: course.html#success");
        exit;
    } else {
        echo "Mail sending failed. Please check your hosting settings.";
    }
}
?>
