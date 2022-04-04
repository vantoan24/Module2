<?php
class ProductModel{
    public function getAll(){
        global $connect;
        $sql = "SELECT * FROM products";
        $stmt = $connect->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getOne($id){
        global $connect;
        $sql = "SELECT * FROM products WHERE MAHANG = $id ";
        $stmt = $connect->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetch();
        return $rows;
    }
    public function store($data){
        global $connect;
        $TENHANG = $data['TENHANG'];
        $LOAIHANG = $data['LOAIHANG'];
        $GIA = $data['GIA'];
        $SOLUONG = $data['SOLUONG'];
        $MOTAMATHANG = $data['MOTAMATHANG'];
        $sql="INSERT INTO products (`MAHANG`, `TENHANG`, `LOAIHANG`, `GIA`, `SOLUONG`, `MOTAMATHANG`) VALUES (NULL, '$TENHANG', '$LOAIHANG', '$GIA','$SOLUONG','$MOTAMATHANG');";
        $connect->exec($sql);
    }
    public function update($id, $data){
        global $connect;
        $TENHANG = $data['TENHANG'];
        $LOAIHANG = $data['LOAIHANG'];
        $GIA = $data['GIA'];
        $SOLUONG = $data['SOLUONG'];
        $MOTAMATHANG = $data['MOTAMATHANG'];
        $sql = "UPDATE products SET TENHANG='$TENHANG',LOAIHANG ='$LOAIHANG',GIA ='$GIA',SOLUONG =' $SOLUONG',MOTAMATHANG ='$MOTAMATHANG' WHERE MAHANG ='$id'";
        $connect->exec($sql);
    }
    public function delete($id){
        global $connect;
        $sql = "DELETE FROM products WHERE MAHANG = '$id'";
        $connect->exec($sql);
    }
    public function search($search){
        global $connect;
        $sql = "SELECT * FROM products WHERE TENHANG LIKE '%$search%'";
        $stmt =$connect->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}