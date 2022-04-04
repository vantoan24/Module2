<?php
include './db.php';
// echo '<pre>';
// print_r($_REQUEST);
// die();
/*
Quản lý sản phẩm
- index.php?controller=SanPham&action=index
Thêm mới sản phẩm
- index.php?controller=SanPham&action=add
Chỉnh sửa sản phẩm
- index.php?controller=SanPham&action=edit
Xóa sản phẩm:
- index.php?controller=SanPham&action=delete

Quản lý người dùng
- index.php?controller=User&action=index
Thêm mới người dùng
- index.php?controller=User&action=add
Chỉnh sửa người dùng
- index.php?controller=User&action=edit
Xóa người dùng:
- index.php?controller=User&action=delete

Quan ly don hang: Order
-index.php?controller=Order&action=index
-index.php?controller=Order&action=add
-index.php?controller=Order&action=edit
-index.php?controller=Order&action=delete
*/
// echo '<pre>';
// print_r( $_REQUEST );
// echo '</pre>';

$controller = $_REQUEST['controller'];//Order
$action     = $_REQUEST['action'];//index
switch ($controller) {
    case "Order":
        include_once './controllers/OrderController.php';
        $objController = new OrderController();
        break;
    case 'SanPham':
        include_once './controllers/SanPhamController.php';
        $objController = new SanPhamController();
        break;
    case 'User':
        include_once './controllers/UserController.php';
        $objController = new UserController();
        break;
    default:
        # code...
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
