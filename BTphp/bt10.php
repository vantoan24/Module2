<?php
function kiemtrasonguyento($n)
{
}
$n = 10; //giới hạn
$tim_thay = 0;//tìm thấy số nguyên tố
$i = 1;//giá trị tăng dần
//nếu tìm thấy<N:chạy vong lặp
while ($tim_thay < $n) {
    //nếu là số nguyên tố tăng biến tìm thấy:1,2,3,4,5,6,7,8,9
    if (kiemtrasonguyento($i)) {
        echo "<br>" . $i;
        $tim_thay++;
    }
    //tăng giá trị
    $i++;
}
