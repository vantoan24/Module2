<?php
class Database {
private $hostname = 'localhost';
private $username = 'root';
private $pass = '';
private $dbname = 'quanlythanhvien';

private $conn = NULL;
private $result = NULL;

public function connect(){
    $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
    if(!$this->conn){
        echo "Kết nối thất bại";
        exit();
    }else{
        mysqli_set_charset($this->conn,'utf-8');
    }
    return $this->conn;
}
//Thuc thi cau lenh truy van
public function execute($sql){
    $this->result = $this->conn->query($sql);
    return $this->result;
}
public function getData(){
    if($this->result){
    $data = mysqli_fetch_array($this->result);
}else{
    $data = 0;
    
}
return $data;
}
//Phuon thuc lay toan bo csdl
public function getAllData(){
    if(!$this->result){
        $data = 0;
    }else{
        while($datas = $this->getData()){
            $data[] = $datas;
        }
    }
    return $data;
}
//phuong thuc them du lieu
public function InsertData($hoten,$namsinh,$quequan){
    $sql = "INSERT INTO thanhvien(id ,hoten , namsinh,quequan)VALUES(null,'$hoten,'$namsinh','$quequan')";
   return $this->execute($sql);
}
// Phuong thuc sua du lieu:
public function UpdateData($id ,$hoten , $namsinh, $quequan){
    $sql = "UPDATE thanvien SET hoten ='$hoten',namsinh ='$namsinh',quequan ='$quequan' WHERE id = '$id'";
   return $this->execute($sql);
}
//Phuong thuc xoa du lieu
public function delete($id){
    $sql = "DELETE FROM thanhvien WHERE id='$id'";
    return $this->execute($sql);
}
}