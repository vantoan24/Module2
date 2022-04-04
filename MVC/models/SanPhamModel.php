<?php
class SanPhamModel {
    //lấy tất cả kết quả
    public function getAll(){
        global $connect;
        $sql = "SELECT * FROM mathang";
        $stmt = $connect->query($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra dữ liệu ve controller
        return $rows;
    }
    //lấy tất 1 kết quả dựa vào id
    public function find($id){
        global $connect;
        $sql = "SELECT * FROM `mathang` WHERE MAHANG = ".$id;
        $stmt = $connect->query($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu là 1 ket qua
        $row = $stmt->fetch();
        //Tra dữ liệu ve controller
        return $row;
    }
    //thêm mới dữ liệu
    public function store(){
        global $connect; 
        $sql = "INSERT INTO `mathang` (`TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) VALUES ('".$_POST['TENHANG']."', '".$_POST['MACONGTY']."', '".$_POST['MALOAIHANG']."', '".$_POST['SOLUONG']."', '".$_POST['DONVITINH']."', '".$_POST['GIAHANG']."')";
        $connect->exec($sql);
    }
    //cập nhật dữ liệu theo id
    public function update(){
        $id = $_POST['id'];
        global $connect; 
        $sql = "UPDATE `mathang` SET `TENHANG` = '".$_POST['TENHANG']."', `MACONGTY` = '".$_POST['MACONGTY']."', `MALOAIHANG` = '".$_POST['MALOAIHANG']."', `SOLUONG` = '".$_POST['SOLUONG']."', `DONVITINH` = '".$_POST['DONVITINH']."', `GIAHANG` = '".$_POST['GIAHANG']."' WHERE `mathang`.`MAHANG` = ".$id;
        $connect->exec($sql);
        // echo "<pre>";
        // print_r($sql);
        // die();  
    }
    //xóa dữ liệu
    public function destroy($id){
        global $connect;
        $sql = "DELETE FROM `mathang` WHERE MAHANG = ".$id;
        $connect->exec($sql);
    }
}