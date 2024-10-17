<?php


require "blocks/header.php";

$title = "Contacts";

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
    <input type="text" name="username" placeholder="Input your name" class="form-control">
    <input type="email" name="email" placeholder="Input your email" class="form-control">
    <input type="text" name="subject" placeholder="Input your subject" class="form-control">
    <textarea name="message" class="form-control" placeholder="Input your message"></textarea>
    <button type="submit" class="btn btn-success">Send</button>

</form>

<?php

require "blocks/footer.php";
?>
