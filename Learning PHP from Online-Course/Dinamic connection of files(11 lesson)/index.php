
<?php
require "blocks/header.php";

$title = "Home PHP";

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
/*
$lis = [1,2,3,4,5,6,7,8,9,10];
unset($lis[2]);//deleting element from array
$lis = array_values($lis);//indexses become normal
rsort($lis);//sorting array
//shuffle($lis);//sorting array elements in random order
print_r($lis);
//echo '<br>';
//var_dump($lis);
echo '<br>';
if(in_array(8,$lis))//in_array - checks for element in array
    echo "Found";
else
    echo "Not Found";
echo '<br>';

$new_list = array_slice($lis, 0, 2);
print_r( $new_list);
echo '<br>';
$new_list2 = array_slice($lis, 0, count($lis) - 2);
print_r( $new_list2);

$arr1 = [4,6,6];
$arr2 = [4,8,2];
$arr3 = array_merge($arr1, $arr2);
echo '<br>';
print_r( $arr3);
echo '<br>';
//перевірка типів даних
$x = "10";
echo gettype($x);
echo '<br>';
echo is_numeric($x);
echo '<br>';
echo is_integer($x);

  //in PHP if FALSE - nothing will show, but if TRUE - 1.






echo '<br>';
//working on text
$word = "example";
echo strpos($word, "xa").'<br>';
echo strpos($word, "p");
echo '<br>';
$Words = "josh,alex,bob";
$arr_Words = explode(",", $Words);//розбивка масиву
print_r($arr_Words);
echo '<br>';

echo implode(" | ", $arr_Words);//збирання масиву назад

//date_default_timezone_set('Europe/Kiev');
// echo date('t F');
//echo date('m-l Час: H:i:s    ', time() + 1000)
//    .'<br>';
//echo time()
//    .'<br>';
//echo date('m-l Час: H:i:s    ', strtotime('now'))
//    .'<br>';
//echo date('m-l Час: H:i:s    ', strtotime('+1 hour'))
//    .'<br>';
//echo date('m-l Час: H:i:s    ', strtotime('next Day'));

*/





//WORK WITH FILES
//$file = fopen('text.txt', 'w');// W - write, A - append, R - read
//fwrite($file, "hello world in new txt file");
//
//fwrite($file, "\nhello second world");
//fwrite($file, "\tHI");
//
//fclose($file);





//$file2 = fopen('text.txt', 'r');
//$get_info_from_file = fread($file2, filesize('text.txt'));
//fclose($file2);
//echo  '<pre>'.$get_info_from_file.'</pre><br>';
//pre - for outputting info with all space amd Enter parameters included
//ADDITION FUNCTIONS FOR FILES
//file_put_contents('a.txt', "Example\nHello");

//echo file_get_contents('a.txt').'<br>';

//echo file_exists('a.txt');

//rename('a.txt', 'b.txt');

//unlink('b.txt');//deleting files
//echo '<br>';
//echo __FILE__;//path of the current file
//echo fileperms(__FILE__).'<br>';//rights of this file

////chmod('text.txt');//securing the file from all doings

//------------------------------------------------------
//phpinfo();
//--------------
//echo '<pre>'.print_r($_SERVER, true).'</pre>';

//echo $_SERVER['HTTPS'].'<br>';

//echo $_SERVER['HTTP_HOST'] . ' - ' . $_SERVER['REQUEST_URI'];
//
//echo $_SERVER['HTTP_USER_AGENT'].'<br>';
//----------------------------------------------------17
//$message = 'Text message';
//$to = 'admin@gmail.com';
//$from  = 'exampleemail@gmail.com';
//$subject = 'SUBJECT TEXT';
//
//$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
//$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset = utf-8\r\n";
//
//mail($to, $subject, $message, $headers);
//----------------------------------------------------18
//cookie
//$user_name = "Alex";
////setcookie("user_name", $user_name, time() + 180);
////setcookie("user_name", $user_name, time() - 180);
//print_r($_COOKIE);
//
//echo '<br>'.$_COOKIE['user_name'].'<br>';
////sessions
//$_SESSION['user_name']= $user_name;
//print_r($_SESSION);
//
//echo '<br>'.$_COOKIE['user_name'].'<br>';
//
//unset($_SESSION['user_name']);
//
//session_destroy();
//
//
//if($_SESSION['user_name'] =="Alex"){/*something*/}
//-----------------------------------------------------19

require "blocks/footer.php";
?>
