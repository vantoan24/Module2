<?php
//THÔNG TIN CSDL
$host ='localhost';
$username ='root';
$password ='';
$db ='module2';
//KẾT NỐI CSDL
global $connect;
$connect =  new PDO('mysql:host='.$host.';dbname='.$db, $username, $password);