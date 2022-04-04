<?php
include './db.php';
// $db = new Database;
// $db->connect;
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller ='';
}

switch($controller){
    case 'thanhvien':{
        require_once('Controllers/User.php');
    }
}
?>