<?php 
header('Content-Type: text/html; charset=utf-8');



$srt = "<p>Hello</p>";
$srt .= "<p>World!</p>";


$pass = 'password123';
echo $pass . '<br>';
echo md5($pass) . '<br>';
echo sha1($pass) . '<br>';


?>
