<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom pronom"];
    $email = $_POST["email"];
    $sujet = $_POST['sujet'];
    $message = $_POST["message"];

    $to = "yangkexin840@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);
    exit();
}