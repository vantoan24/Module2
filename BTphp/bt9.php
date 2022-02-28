<?php
function kiemtrasnt($n)
{
    // Biến cờ hiệu
     $flag = true;
 
    // Nếu n bé hơn 2 tức là không phải số nguyên tố
    if ($n < 2){
        $flag = false;
    }
    else{
        // lặp từ 2 tới n-1
        for ($i = 2; $i < $n-1; $i++)
        {
            if ($n % $i == 0){
                $flag = false;
                break;
            }
        }
    }
 
    // Kiểm tra biến flag
    
    if($flag == true){
        return true;
    }else{
        return false;
    }
}


//Chạy vòng lặp số từ 1--> 100
for($i=1;$i<=100;$i++){
    if(kiemtrasnt($i)== true){
        echo "<br>".$i;
    }
}