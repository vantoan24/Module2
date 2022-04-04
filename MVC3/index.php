<?php
include './db.php';

$controller = $_REQUEST['controller'];
$action = $_REQUEST['action'];

switch ($controller){
 case "Product":
    include_once './Controllers/ProductController.php';
    $objController = new ProductController();
    break;
 case "User":
    include_once './Controllers/UserController.php';
    $objController = new UserController();
    break;
    default:

    break;
}

switch ($action) {
    case 'index':
        $objController->index();
        
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
    default:
        $objController->index();
        break;
}