<?php 
function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}
//функции для работы с массивами php
//https://www.php.net/manual/ru/ref.array.php 
/*
 * count - Подсчитывает количество элементов массива или чего-либо в объекте
 * array_count_values — Подсчитывает количество всех значений массива
 * array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
 * in_array — Проверяет, присутствует ли в массиве значение
 * array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
 * array_keys — Возвращает все или некоторое подмножество ключей массива
 * array_values — Выбирает все значения массива
 * array_unique — Убирает повторяющиеся значения из массива
 */
$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];
$food = array(
              'fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea')
              );
//$n = "Hello world";

// рекурсивный подсчёт
//var_dump(count($food, COUNT_RECURSIVE));

// обычный подсчёт
//debug(count($food,0));
$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
$array = array(1, "hello", 1, "world", "hello");

//debug(array_count_values($nums));

$searchArray = ['first' => 56, 'second' => 4];
//var_dump(array_key_exists('first', $searchArray));

$os = array(10 => "mac", "NT", "Irix", "Linux");

//debug($os);
/*
if (in_array("Irix", $os)) {
    echo "Функция нашла значение 'Irix'";
}

if (in_array("mac", $os)) {
    echo "Функция нашла значение 'mac'";
}
*/

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array)."<br>"; // Значение переменной $key равно 2;
//print_r($key);

$key = array_search('red', $array)."<br>";   // Значение переменной $key равно 1;
//print_r($key);


$array = array(0 => 100, "color" => "red");
debug(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
debug(array_keys($array, "blue"));

$array = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);
debug(array_keys($array));



?>