<?php
$books = ["Van","Toan","Ly"];
        //    0   , 1  ,  2
        for($i=0;$i<count($books);$i++){
            //$1
            // echo '<br>'.$books[$i];
        }
    $student = [0 => "Nguy Van A",1 => "18 tuoi",  2 => "coder"];
    //tuong duong mang tren
    //Bat tuan tu
    $student = [
        'ten'            => "Nguy Van A",
        'tuoi'           => "18 tuoi",
        'nghe nghiep'    => "coder"
    ];
    foreach($student as $index => $item){
        //$ inex 'ten'   'tuoi'    'nghe nghiep' 
       echo $index.':'.$item.'<br>';
       
    }

?>