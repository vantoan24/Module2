<?php
$ket_qua=0;
//kiem tra neu người dung đã gửi dữ liệu qua post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // code xu lý khi người dùng gủi dữ liệu đi
    // echo '<pre>';
    // print_r($REQUEST);
    // die();
    $usd =$_REQUEST ['usd'];
    $rate = 23000;
    $ket_qua=$usd*$rate;
    $ket_qua=number_format($ket_qua);
    //echo $ket_qua;
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
    <h1>Ứng dụng chuyển đổi tiền tệ</h1>
    <form action=""method="post">
   <input type="text" name="usd"> <br>
    <button value="">Change </button>
    </form>
    <p><?php
        echo $ket_qua;
      ?> </p>
</body>
</html>