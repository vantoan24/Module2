<?php
include './Models/NotetypeModel.php';
class NotetypeController {
    public function index(){
        $Notetype = new NotetypeModel();
        $notestype = $Notetype->getAll();
    include_once './Views/Notestype/index.php';
    }
    public function show(){
        $id = $_GET['id'];
    include_once './views/Notes/show.php';
    }
    public function add(){
        $errors= [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $NotetypeModel = new NotetypeModel();
            $Notetype = $NotetypeModel->store($_REQUEST);
            $_SESSION['flash_message'] = 'Thêm mới thành công';
            header('Location:index.php?controller=Notetype&action=index');
         }
         include_once './views/Notestype/add.php';
    }
    public function edit(){
      $id = $_GET['id'];
      $NotetypeModel = new NotetypeModel();
      $notetype =  $NotetypeModel->getOne($id);
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $NotetypeModel->update($id,$_REQUEST);
        header('Location:index.php?controller=Notetype&action=index');

      }
     include_once './views/Notestype/edit.php';
    }
    public function delete(){
        try {
            $id = $_GET['id'];
            $NotetypeModel   = new NotetypeModel();
            $NotetypeModel->delete($id);
            $_SESSION['flash_message'] = 'Xóa thành công';
        } catch (\Exception $e) {
            $_SESSION['flash_message'] = 'Không thể xóa còn liên kết bảng note !';
        }
        header('Location:index.php?controller=Notetype&action=index');
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $NotetypeModel = new NotetypeModel();
            $notestype = $NotetypeModel->search($search); 
        }
        include_once './views/Notestype/search.php';
    }

}