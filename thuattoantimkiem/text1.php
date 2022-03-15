<?php
//Thuật toán tìm kiếm tuyến tính
// $array = [1,5,9,8,7];
// for($i = 0; $i <count($array); $i++){
//     if($array[$i]==8){
//         echo "Tìm thấy vị trí tại $i";
//         break;
//     }
// }
//Thuật
$array = [2 , 5, 8, 12, 16, 23, 38, 56, 72, 91];
//        0   1  2   3   4   5   6   7   8   9
$find=23;
$L=0;
$R =count($array)-1;

// $M = floor( ($L+$R) /2 );
// if ( $array[$M] < $find ) {
//     $L = $M + 1;
// }else if( $array[$M] > $find ){
//     $R = $M - 1;
// }else{
//     echo "Tìm thấy $find tại vị trí $M";
// }

// $M = floor( ($L+$R) /2 );
// if ( $array[$M] < $find ) {
//     $L = $M + 1;
// }else if( $array[$M] > $find ){
//     $R = $M - 1;
// }else{
//     echo "Tìm thấy $find tại vị trí $M";
// }

// $M = floor( ($L+$R) /2 );
// if ( $array[$M] < $find ) {
//     $L = $M + 1;
// }else if( $array[$M] > $find ){
//     $R = $M - 1;
// }else{
//     echo "Tìm thấy $find tại vị trí $M";
// }

// echo $L."<br>";
// echo $R."<br>";
// echo $M."<br>";

while($L<=$R) {
    $M = floor( ($L+$R) /2 );
    if ( $array[$M] < $find ) {
        $L = $M + 1;
    }else if( $array[$M] > $find ){
        $R = $M - 1;
    }else{
        echo "Tìm thấy $find tại vị trí $M";
        break;
    }
}