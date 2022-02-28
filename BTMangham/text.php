<?php
$books = ["Toán", "Lý", "Hóa"];
for ($i=0; $i<count($books); $i++){
    echo $books[$i].'<br>';
}

$usname = [
    "name"   => "Toàn",
    "age"    => "19",
    "phone"  => "09488888899",
];
foreach ($usname as $key=>$value){
    echo $value.'<br>';
}

$books = [
    ["Toán", "Lý", "Hóa"],//0
    //0      1        2
    ["Văn", "Sử", "Địa"]//1
    //0       1       2
];


//Duyetj vòng lặp
for($i=0; $i<count($books); $i++){
    for($j=0; $j<count($books[$i]); $j++){
        echo $books[$i][$j].'<br>';
    }
};
