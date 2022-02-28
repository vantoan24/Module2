<?php
if ($_SERVER["REQUEST_METHOD"]   == 'POST') 
{
    $InventmentAmount = $_POST["InventmentAmount"];
    $YearlyInterestRate = $_POST["YearlyInterestRate"]  ;
    $NumberofYears = $_POST["NumberofYears"]     ;
    $result = $InventmentAmount + (($InventmentAmount * $YearlyInterestRate) / 100);
    echo $result;
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
    <h2>Ứng dụng Future Value Calculator</h2>
    <form action="" method="post">
        Inventment Amount: <br>
        <input type="number" name="InventmentAmount" placeholder="Lượng tiền đầu tư ban đầu"> <br>
        Yearly Interest Rate: <br>
        <input type="number" name="YearlyInterestRate" placeholder=" Lãi suất năm"> <br>
        Number of Years: <br>
        <input type="number" name=" NumberofYears" placeholder="Số năm đầu tư"> <br>
        <button type="submit" id="submit"> Calculate</button>
    </form>
</body>

</html>