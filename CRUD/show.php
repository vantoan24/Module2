<?php include_once './db.php';?>

<?php
$sql = "SELECT * FROM `mathang` WHERE MAHANG = 10";
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetchALL se tra ve du lieu là 1 ket qua
$row = $stmt->fetch();
echo $row->TENHANG;
echo "<pre>";
print_r($row);
die();
