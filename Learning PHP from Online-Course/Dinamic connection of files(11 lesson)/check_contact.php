<?php
    session_start();

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;



