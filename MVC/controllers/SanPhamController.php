<?php
include_once './models/SanPhamModel.php';
class SanPhamController {
    public function index(){
        $ProductModel = new SanPhamModel();
        $products = $ProductModel->getAll();
        include_once './views/SanPham/index.php';
    }
    //Thêm dữ liệu
    public function add(){
        $id  = $_REQUEST['id'];//1
        $ProductModel = new SanPhamModel();
        $product = $ProductModel->find($id);
        // echo "<pre>";
        // print_r($product);
        // die();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ProductModel->store($id);
            header('Location: index.php?controller=SanPham&action=index');
            die();
        }
        echo '<br>'.__METHOD__;
        include_once './views/SanPham/add.php';
    }
    //Sửa dữ liệu
    public function edit(){
        $id  = $_REQUEST['id'];//1
        $ProductModel = new SanPhamModel();
        $product = $ProductModel->find($id);
        // echo "<pre>";
        // print_r($product);
        // die();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ProductModel->update($id);
            header('Location: index.php?controller=SanPham&action=index');
            die();
        }
        echo '<br>'.__METHOD__;
        include_once './views/SanPham/edit.php';
    }
    // Xóa dữ liệu
    public function delete(){    
        $id  = $_REQUEST['id'];//1
        $ProductModel = new SanPhamModel();
        $ProductModel->find($id);
        // echo "<pre>";
        // print_r($product);
        // die();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ProductModel->destroy($id);
            header('Location: index.php?controller=SanPham&action=index');
            die();
        }
        echo '<br>'.__METHOD__;
        include_once './views/SanPham/delete.php';
    }
}