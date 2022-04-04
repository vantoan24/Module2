<?php include_once './db.php';?>

<?php
$sql = "UPDATE mathang set TENHANG='SỮA VINAMILK' WHERE MAHANG = 10" ;
$conn->exec($sql);