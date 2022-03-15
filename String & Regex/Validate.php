<?php
//Bắt đầu bằng một ký tự chữ hoa C hoặc A hoặc P
//Không chứa các ký tự đặc biệt
//Theo sau ký tự bắt đầu là 4 ký tự số 
//Kết thúc phải là 1 trong những ký tự chữ hoa sau: G, H, I, K, L, M
//Ví dụ tên lớp hợp lệ: C0318G
//Ví dụ tên lớp không hợp lệ: M0318G, P0323A
$pattern = '/^[C|A|P][0-9]{4}[G|H|I|K|L|M]/';
$class_name = 'C0318G';
$class_name2 = ' M0318G, P0323A';
function check_class($pattern,$class_name){
if(preg_match($pattern,$class_name)){
    echo "Tên lớp hợp lệ.<br>";
}else{
    echo "Tên lớp không hợp lệ";
}
}
echo check_class($pattern,$class_name,$class_name2);