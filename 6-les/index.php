<?php 
function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

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

$nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];
$array = array(1, "hello", 1, "world", "hello");


$searchArray = ['first' => 56, 'second' => 4];
//var_dump(array_key_exists('first', $searchArray));

$os = array(10 => "mac", "NT", "Irix", "Linux");



$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array)."<br>"; // Значение переменной $key равно 2;


$key = array_search('red', $array)."<br>";   // Значение переменной $key равно 1;



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
