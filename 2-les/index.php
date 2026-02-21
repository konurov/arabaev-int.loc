<?php
error_reporting(-1);

/*
Арифметически операторы
"+" сложение $a + $b
"-" вычитание $a - $b
"*" умножение $a * $b
"/" деление $a / $b
"-$a" отрицание (смена знака $a)
"$a % $b" деление по модулю (остаток от деления)
"$a ** $b" возведение в степень
"=" присваивание (установка значения)
"&" присваивание по ссылке
============================
"++$a" префиксный инкремент
"$a++" постфиксный инкремент
"--$a" префиксный декремент
"$a++" постфиксный декремент
"." конкатенация (склеивание строк)
комбинированные операторы
*/
/*$a=12;
$b=3;
echo "Сложение $a+$b = " . ($a+$b)."<br>";
echo "Вычитание $a-$b = " . ($a-$b)."<br>";
echo "Умножение $a*$b = " . ($a*$b)."<br>";
echo "Деление $a/$b = " . ($a/$b)."<br>";
echo "Остаток от деления $a%$b = " . ($a%$b)."<br>";
echo "Возведение в степень $a**$b = " . ($a**$b)."<br>";*/
/*
$a = 2;
echo "Постфиксный инкремент: --$a = " . --$a . "<br>";
#echo "Постфиксный декремент: $a-- = " . $a-- . "<br>";

echo "Префиксный инкремент: --$a = " . --$a . "<br>";
*/
/*
$a = 15;
$b = $a + 5;
if($b == 20) {
    echo " A меньше B";
} else {
    echo " A больше B";
}*/

$light = 'yellow';
/*
if( $light == 'green' ){
	echo 'We may go';
} elseif( $light == 'yellow' ){
    echo 'Wait';
}elseif( $light == 'red' ){
    echo 'Stop';
}*/


$light = 'red';
/*
switch ($light) {
    case 'green':
        echo 'We may go';
        break;
    case 'yellow':
        echo 'Wait';
        break;
    case 'red':
        echo 'Stop';
        break;
    default:
        echo 'Wrong color';
}*/
/*
do {
    echo "Hello world!<br>";
} while (false);*/
 /*$i =1;
while ($i < 5) {
     ++$i;
    echo "Hello world!<br>";
    
}*/
 //$a = 0;
 /*
for ($i = 0; $i < 5; $i++) {
   echo  $i;
   echo "Hello world!<br>";
}*/
/*
$a = [1, 2, 3, 4, "Hello world!"];
var_dump($a);

echo "<br>";
echo $a[3];

echo "<br>";
foreach ($a as $key =>$value) {
    echo $key . " => " . $value . "<br>";
}*/

$arr2 = [
	1,
	2,
	[
		'banana',
		'orange',
		'apple'
	],
	4,
	'cat',
	6,
	7,
	8,
	9,
	10,];
echo "<pre>";
print_r($arr2);
echo "</pre>";

echo $arr2[2][0];







?>