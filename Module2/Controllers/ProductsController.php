<?php
include './Models/ProductsModel.php';
class ProductController{
    public function index(){
        $alert = (isset($_SESSION['alert'])) ? $_SESSION['alert'] : '';
        unset($_SESSION['alert']);
        $ProductModel = new ProductModel();
        $products = $ProductModel->getAll();     
        include './Views/Products/list.php';
    }
    public function get_One(){
        $id = $_REQUEST['id'];
        $ProductModel = new ProductModel();
        $ProductModel->getOne($id);           
    }
    public function add(){      
        $ProductModel = new ProductModel();
        $products = $ProductModel->getAll(); 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ProductModel = new ProductModel();
            $products= $ProductModel->store($_REQUEST);
            header('Location:index.php?controller=product&action=index');
        }
        include './Views/Products/add.php';
    }
    public function edit(){
        $id =$_REQUEST['id'];
        $ProductModel = new ProductModel();
        $product=$ProductModel->getOne($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){           
                $ProductModel->update($id,$_REQUEST);             
            header('Location:index.php?controller=product&action=index');
        }
        $ProductModel = new ProductModel();
        $products = $ProductModel->getAll();   
        include './Views/Products/edit.php';
    }
    public function delete(){
        $id = $_GET['id'];
        $ProductModel = new ProductModel();
        $product = $ProductModel->getOne($id);
        $ProductModel->delete($id);
        header('Location:index.php?controller=product&action=index');
        include './Views/Products/delete.php';
    }
    public function search(){
        $search = $_POST['search'];
        $ProductModel = new ProductModel();
        $products= $ProductModel->search($search);
      
        include './Views/Products/search.php';
    }
}