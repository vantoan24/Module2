<?php
// $mang = [1,5,8,7,6,4];

// for($i=0; $i <count($mang)-1; $i++){
//     for($j= $i+1; $j < count($mang);$j++){
//         if($mang[$i] < $mang[$j]){
//             $temp     = $mang[$j];
//             $mang[$j] = $mang[$i];
//             $mang[$i] = $temp;
//         }
//     }
// }
// for($i=0; $i < count($mang);$i++){
//     echo $mang[$i];
// }

function sapxep($arr){
    for($i=0; $i < count($arr) -1;$i++){
        for($j= $i+1;$j < count($arr);$j++){
            if($arr[$i] > $arr[$j]){
                $temp     = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [1,5,8,7,6,4];
echo    "<pre>";
 print_r(sapxep($arr));
 die();