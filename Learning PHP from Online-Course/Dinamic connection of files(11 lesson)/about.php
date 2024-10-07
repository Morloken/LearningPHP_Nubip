
<?php
$title = "About PHP";
require "blocks/header.php";
?>
<div class="container">
    <h1>About us</h1>

    <form action="blocks/check_post.php" method="post">
        <input type="text" name="username" placeholder="Enter name" class="form-control"><br>
        <input type="email" name="email" placeholder="Enter email" class="form-control"><br>
        <input type="password" name="password" placeholder="Enter password" class="form-control"><br>
        <textarea class="form-control" placeholder="Enter message" name="message"></textarea><br>
        <input type="submit" value="Send" class="btn btn-success">

    </form>
</div>


<?php
require "blocks/footer.php";
?>
