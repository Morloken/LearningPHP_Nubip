<?php
    session_start();



    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);


    function  redirect()
    {
        header("location:contact.php");
        exit();
    }

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($username) <= 1 || strlen($username) > 30){
       $_SESSION['error_username'] = "Username must be between 1 and 30 characters";
        redirect();
    }
    else if(strlen($email) <= 1 || strlen($email) > 50){
        $_SESSION['error_email'] = "Email must be between 1 and 50 characters";
        redirect();
    }
    else if(strlen($subject) <= 1 || strlen($subject) > 50){
        $_SESSION['error_subject'] = "Subject must be between 1 and 50 characters";
        redirect();
    }
    else if(strlen($message) <= 1 || strlen($message) > 500){
        $_SESSION['error_message'] = "Message must be between 1 and 500 characters";
        redirect();
    }
else{
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: " . $email . "\r\n" . "Reply-To: " . $email .
        "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n";
    mail("test@gmail.com", $subject, $message, $headers);

    $_SESSION['message'] = "Your message has been sent!";
    redirect();
}


