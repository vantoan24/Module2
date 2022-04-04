<?php
session_start();
include_once './db.php';
$controller = $_REQUEST['controller'];
$action = $_REQUEST['action'];
switch ($controller){
    case 'product':
        include './Controllers/ProductsController.php';
        $objController = new ProductController;
        break;
}

switch ($action){
    case 'index':
        $objController->index();
        break;
    case 'show':
        $objController->get_One();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    case 'search':
        $objController->search();
        break;
    default:
        $objController->index();
        break;
}