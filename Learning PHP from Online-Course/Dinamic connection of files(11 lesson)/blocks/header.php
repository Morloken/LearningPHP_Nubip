
<?php

//session_start();
////    if(isset($_GET['lesson']) && $_GET['lesson'] != '')
//if(isset($_GET['lesson']))
//
////        if($_GET['?_ijt'] != '')
//        {
////            $link = explode("_ijt", $_SERVER['REQUEST_URI']);
//            $link = explode("lesson", $_SERVER['REQUEST_URI']);
//            $redirect = 'http://'.$_SERVER['HTTP_HOST'].$link[0];
//
//
//            header('HTTP/1.1 301 Moved Permanently');
//            header('Location: '.$redirect);exit;
//        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <title><?=$title?></title>
    <style>

        body{
            background: #fff;
            color: black;
            margin: 20px;
        }
    </style>


    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<header>
    <a href="index.php">Home</a> | <a href="about.php">About</a> | <a href="contacts.php">Contact us</a>
</header>