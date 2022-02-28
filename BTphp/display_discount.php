
<?php
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

$ListPrice = $_REQUEST['ListPrice'];
$DiscountPercent = $_REQUEST['DiscountPercent'];
$result = $ListPrice * $DiscountPercent * 0.01;
echo "Discount Amount: Lượng chiết khấu: ".$result;
echo "<br>";
echo "Discount Price: Giá sau khi đã được chiết khấu là: ".$ListPrice - $result;