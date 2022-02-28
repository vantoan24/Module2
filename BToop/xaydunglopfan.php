<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ("fan.php");
$objfan2 = new fan(5,false,"blue",5);
$objfan2->toString();
echo $objfan2->toString();
$objfan1 = new fan(5,true,"blue",5);
echo $objfan1->toString();

?>

</body>
</html>
