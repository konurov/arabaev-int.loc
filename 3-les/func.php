<?php 
 /*function sum($a = null, $b = 6){
 //$a = 100;   
echo $b + $a;

}*/

 function sum($a = null, $b = 6){
 //$a = 100;   
//echo $b + $a;
$c = $b + $a;
 
return $c;

}

function my_array_keys($ar){
    $data = [];
    foreach($ar as $key => $name){
       $data[] = $key;
       
    }
    return $data;
    
}
/*

count
array_diff
array_intersect
array_key_exists
array_keys
array_values
array_merge
array_rand
array_reverse
compact
extract
arsort
asort
sort
rsort

array_combine
array_search
array_shift
array_unique
array_unshift
array_flip
array_pop
array_push
in_array
list
*/

?>