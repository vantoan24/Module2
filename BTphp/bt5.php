<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $ProductDescription = $_POST["ProductDescription"];
//     $ListPrice = $_POST["ListPrice"];
//     $DiscountPercent = $_POST["DiscountPercent"];
//     $result = (($ListPrice* $DiscountPercent)*0.01);
//     echo $result;
// };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ứng dụng Product Discount Calculator</h2>
    <form action="display_discount.php" method="post">
        Product Description <br>
        <input type="text" name="ProductDescription" placeholder="Mô tả của sản phẩm"> </br>
        List Price <br>
        <input type="number" name="ListPrice" placeholder="Giá niêm yết của sản phẩm"> </br>
        Discount Percent <br>
        <input type="number" name="DiscountPercent" placeholder="Tỷ lệ chiết khấu (phần trăm)"> </br>
        <button type="submit" id="submit">Calculator</button>
    </form>
</body>

</html>