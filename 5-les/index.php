<?php 
error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/*
 * Напишите функцию str_count($str, $substr), которая принимает 2 аргумента: 
 * строку и подстроку. Функция должна возвращать кол-во вхождений подстроки в строку.
 *  Пример: 'hello', 'l' => 2
 * */
/*
* Str_count($str, $substr) деген функция жазыңыз.
* Бул функция 2 аргумент кабыл алат: сап (строка) жана подсап (подстрока).
* Функция подсап саптын ичинде канча жолу кездешкенин кайтарышы керек.
* Мисал: 'hello', 'l' => 2
*/
//echo strlen('Hello world!'); // 12
function my_strlen($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}
//echo my_strlen('Hello worldczxczxc!'); // 12

function my_strlen1($str)
{
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $count++;
    }
    return $count;
    
}
//echo my_strlen1('Hello worldczxczxc!');

//echo substr('Hello world!', 9, -1); // world

function my_substr($str, $start, $length = null)
{
    $result = '';
    if ($length === null) {
        for ($i = $start; isset($str[$i]); $i++) {
            $result .= $i.' - '.$str[$i].'<br>';
        }
    } else {
        for ($i = $start; isset($str[$i]) && $i < $start + $length; $i++) {
            $result .= $i.' - '.$str[$i].'<br>';;
        }
    }
    return $result;
}
function my_substr1($str, $start, $length)
{
    $result = '';
  
        for ($i = $start; isset($str[$i]) && $i < $start + $length; $i++) {
            $result .= $i.' - '.$str[$i].'<br>';;
        }
    
    return $result;
}
function my_substr2($str, $start, $length)
{
    $result = '';
    for ($i = $start; isset($str[$i]) && $i < $start + $length; $i++) {
        $result .= $str[$i];
    }
        
    
    return $result;
}



echo my_substr2('Hello world!', 9, -1); // world



function my_substr_count($str, $substr)
{
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if (my_substr2($str, $i,my_strlen($substr)) === $substr) {
            $count++; 
        }
    }
    return $count;
}



function str_count($str, $sfubstr){
    return my_substr_count($str, $sfubstr);
}
//echo str_count('Sanjar', 'a');


/*
 * Напишите функцию no_space(string $str): string, которая принимает 
 * аргументом строку и возвращает строку с удаленными пробелами
 * */

function no_space(string $str): string
{
    return str_replace(' ', '', $str);
}

//var_dump(no_space(' Hello, world! '));


/*
 * Напишите функцию max_number(int $num): int, которая принимает аргументом число и 
 * возвращает максимальное число из цифр, полученного аргумента. Пример: 123 => 321
 * */

function max_number(int $num): int
{
    $digits = str_split($num);
    rsort($digits);
    return (int)implode('', $digits);
}

//echo max_number(5159);





?>