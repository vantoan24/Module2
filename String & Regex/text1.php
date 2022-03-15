<?php
// echo ' <br> Tôi là người "Bất tử" ';
// echo " <br> Tôi là người 'Bất tử' "."<br>";
// $string = ["Toán","Lý","Hóa"];
// echo implode("-", $string);

//str_replace( $chuoi_tim, $chuoi_thay_the, $chuoi_nguon )
$str = "Tôi đi CODE";
echo str_replace("CODE","code",$str);

$str = "0943111222";
echo substr( $str,  0, 4);
if(substr( $str,  0, 4) ){
    echo "Vinaphone";
}else{
    echo "Không phải Vinaphone";
}




