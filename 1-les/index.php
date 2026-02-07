<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   // однострочный комментарий
		# это также однострочный комментарий
		/* это
		многострочный
		комментарий
		здесь не будут выполняться команды
		echo '<p>Привет мир!</p>'; */
   /*echo "<h1>hello world 1</h1>";
   print "<h1>hello world 2</h1>";*/
/*
   $name = "John";
   $name = "Jane";   
   echo '<h1> Привет,'.$name.'</h1>';*/

 /*  $title = 'hello world!';
$title = 'page title';*/
$fruit = 'apple';
$winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
// $winnieThePooh = "Hello, I'm Winnie";

$var = '123';
$Var = '456';

define("PAGE", "new pagebdfbdbcxcvdfbc xcb");
echo PAGE;

// define("PAGE", "new page2");

const PAGE2 = 'new const';

   ?>   
</body>
</html>