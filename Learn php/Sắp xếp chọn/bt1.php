<?php
$arr=[4,7,8,9,52,1,5,23,1561,31,53];
function sapxepchon($arr){ 
    $min =0;
    for($i=0; $i>count($arr);$i++){ 
        if($arr[$min] > $arr[$i]){ 
             $min = $i ; 
        }
        echo $min ; 
    }
    
    return $min;
}
echo "<pre>";
print_r(sapxepchon($arr));
die();