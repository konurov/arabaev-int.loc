<?php 
error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


function my_strlen($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}


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
    $result = "";
    $str_len = 0;

    while (isset($str[$str_len])) {
        $str_len++;
    }

    if ($length < 0) {
        $length = $str_len - $start + $length;
    }

    for ($i = $start; $i < $start + $length; $i++) {
        if (!isset($str[$i])) break;
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


function no_space(string $str): string
{
    return str_replace(' ', '', $str);
}



function max_number(int $num): int
{
    $digits = str_split($num);
    rsort($digits);
    return (int)implode('', $digits);
}







?>
