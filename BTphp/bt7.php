<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     // Array
    // (
    //     [First_operand] => 23
    //     [Operator] => +
    //     [Secondoperand] => 2
    // )
    $Firstoperand = $_REQUEST['Firstoperand'];
    $Operator = $_REQUEST['Operator'];
    $Secondoperand = $_REQUEST['Secondoperand'];
    $tinh=0;
    switch($Operator){
        case '+': $tinh = (int) $Firstoperand +(int) $Secondoperand ;
        break;
        case '-':$tinh = (int)$Firstoperand - (int)$Secondoperand;
        break;
        case '*':$tinh=(int) $Firstoperand * (int)$Secondoperand;
        break;
        case '/':$tinh= (int)$Firstoperand / (int)$Secondoperand;
    }
}

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
    <h1>Simple Calculator</h1>
    <form action="" method="post">
        First operand:
        <input type="text" name=" Firstoperand"> <br>
        Operator:
        <select type="text" name=" Operator">
            <option value="+"> Addition</option>
            <option value="-"> apart from </option>
            <option value="*"> core</option>
            <option value="/"> share</option>
        </select> <br>
        Second operand:
        <input type="text" name="Secondoperand"> <br>
        <button value="submit">Calculator</button>
    </form>
    <p><?php
        echo ( isset($tinh) && $tinh >0)? " $Firstoperand $Operator $Secondoperand"." = " .$tinh:'';
    ?> </p>
</body>
</html>
