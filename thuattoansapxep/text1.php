<?php   
//ham doi vi tri
function swap($ts_arr,$index){
    //$ts_arr:[1,5,9,8,7]
    //$index: 0
    //$ts_arr[$index]: 1
    //$ts_arr[$index + 1]: 5 

    $temp = $ts_arr[$index + 1];//5
    $ts_arr[$index + 1] = $ts_arr[$index];//1
    $ts_arr[$index] = $temp;//5

    //$ts_arr:[5,1,9,8,7]

    return $ts_arr;
}

$arr = [1,5,9,8,7];
//      0 1 2 3 4  
$narr = swap($arr,0);

echo '<pre>';
print_r($arr);
print_r($narr);
die();