<?php
$age = 17;
try{
    if ($age<18){
       throw new Exception (message: " Bạn kh được uống bia"."<br>");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally{
    echo "Chạy vào đây";
    echo ord ('qdc');
}

