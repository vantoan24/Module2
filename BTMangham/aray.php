<?php
$books_1 = ['Toán','Lý','Hóa'];
$books_2 = ['Văn','Sử','Địa'];

//- array_merge: array_merge(arr_1,arr_2,arr_3)
$books = array_merge($books_1,$books_2);

echo '<pre>';
print_r($books);
echo '</pre>';

//- array_push:thêm một phần tử vào cuối mảng
array_push($books_1,'Anh');
echo '<pre>';
print_r($books_1);
echo '</pre>';

//- array_splice: thay đổi phần tử trong mảng

//- array_unshift: thêm một phần tử vào đầu mảng
array_unshift($books_1,'Sinh');
echo '<pre>';
print_r($books_1);
echo '</pre>';
//- array_search: tìm phần tử và trả về chỉ số
echo array_search('Sử',$books_2);



//- count: trả về độ dài của mảng

//- current: trả về giá trị phần tử đầu tiên của mảng

//- end: trả về giá trị phần tử cuối cùng của mảng
echo end($books_1);

//- in_array: kiểm tra phần tử có trong mảng hay ko
var_dump( in_array("Lý",$books_1) );

//- unset: xóa phần tử trong mảng dựa vào chỉ số