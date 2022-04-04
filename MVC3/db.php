<?php
//THONG TIN CSDL
$host = 'localhost' ;
$username = 'root';
$password = '';
$database = 'text' ;
//KẾT NỐI CSDL
global $connect;
$conn = new PDO('mysql:host=localhost;dbname=', $username, $password);