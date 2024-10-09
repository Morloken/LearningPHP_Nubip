
<?php
$title = "Home PHP";
require "blocks/header.php";
#   include better
# include_once Only one time
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
<h1 class="zagolovok">Home page</h1>


<?php
date_default_timezone_set('Europe/Kiev');
// echo date('t F');
echo date('m-l Час: H:i:s    ', time() + 1000)
    .'<br>';
echo time()
    .'<br>';
echo date('m-l Час: H:i:s    ', strtotime('now'))
    .'<br>';
echo date('m-l Час: H:i:s    ', strtotime('+1 hour'))
    .'<br>';
echo date('m-l Час: H:i:s    ', strtotime('next Day'));

require "blocks/footer.php";
?>
