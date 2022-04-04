<?php include_once './db.php';?>

<?php
$sql = "DELETE FROM mathang WHERE MAHANG = 10";
$conn->exec($sql);