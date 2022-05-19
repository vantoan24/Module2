<?php
//  $sum = 0;
//  for($i=0;$i<=99;$i++){
//      $sum +=$i;
//      echo "Tổng dãy số từ 1 đến 99 là $sum"."<br>"; 
//  };

  for($i=1;$i<=100;$i++){
    if( $i % 3 == 0){
        echo "fizz"."<br>";
    }else if($i %3&5 != 0){
        echo "fizz Buzz"."<br>";
    }else{
        echo $i . "<br>";
    }
}
