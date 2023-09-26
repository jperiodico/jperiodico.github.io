<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    $to = "periodicojoshuavigonte@gmail.com";
    $subject = "Feedback from $name";
    $message = "Name: $name\nEmail: $email\nFeedback: $feedback";

    // Send the email
    mail($to, $subject, $message);

    // Redirect the user to a thank-you page
    header("Location: index.html");
    exit();
}
?>
