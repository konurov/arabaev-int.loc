<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}



$nums = [
        [2, 3, 1, 4],
        [1,4,4],
        [5, 3, 2, 6, 7],
        [7, 8, 8, 9, 2, 5],
        1
        ];


$nums2 = [
        [2, 3, 1, 4],
        [1,4,4],
        [5, 3, 2, 6, 7],
        [7, 8, 8, 9, 2, 5]
        ];
 function user_count($arr){
    $countNew = 0;
        foreach($arr as $item){
            foreach($item as $raw){
               //debug($ite);
             $countNew++;
            }
           $countNew++;
            }
            
            
        return $countNew;
 }
 var_dump(user_count($nums2));








?>
