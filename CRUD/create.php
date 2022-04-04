<?php include_once './db.php';?>

<?php
$sql = "INSERT INTO mathang (`TENHANG`,`MACONGTY`,`MALOAIHANG`,`SOLUONG`,`DONVITINH`,`GIAHANG`)
VALUES ('TULANH',2,2,5,'CAI',361358)";

$conn->exec($sql);