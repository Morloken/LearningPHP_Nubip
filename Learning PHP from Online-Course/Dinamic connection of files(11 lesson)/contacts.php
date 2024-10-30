<?php


require "blocks/header.php";

$title = "Contacts";

if(isset($_SESSION['username'])) $username = $_SESSION['username'];
else $username = "";

if(isset($_SESSION['error_username'])) $error_username = $_SESSION['error_username'];
else $error_username = "";

if(isset($_SESSION['error_email'])) $error_email = $_SESSION['error_email'];
else $error_email  = "";

if(isset($_SESSION['error_subject'])) $error_subject = $_SESSION['error_subject'];
else $error_subject  = "";

if(isset($_SESSION['error_message'])) $error_message = $_SESSION['error_message'];
else $error_message  = "";




?>
<style>
    body{
        background: #050505;
        color: white;
    }
    header, footer{
        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 1vw;
    }
    .zagolovok{
        text-align: center;
    }
</style>
<h1 class="zagolovok"><?=$title?></h1>

<form action="check_contact.php" method="post">
    <input type="text" name="username" placeholder="Input your name" class="form-control" value = "<?=$_SESSION['username']?>">
    <div class="text-danger"><?=$error_username?></div>
    <input type="email" name="email" placeholder="Input your email" class="form-control" value = "<?=$_SESSION['email']?>">
    <div class="text-danger"><?=$error_email?></div>
    <input type="text" name="subject" placeholder="Input your subject" class="form-control" value = "<?=$_SESSION['subject']?>">
    <div class="text-danger"><?=$error_subject?></div>
    <textarea name="message" class="form-control" placeholder="Input your message"><?=$_SESSION['message']?></textarea>
    <div class="text-danger"><?=$error_message?></div>
    <button type="submit" class="btn btn-success">Send</button>

</form>

<?php

require "blocks/footer.php";
?>
