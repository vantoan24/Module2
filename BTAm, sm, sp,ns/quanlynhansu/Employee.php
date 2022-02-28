<?php
namespace  Employee;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usename = $_POST["usename"];
    $more = $_POST["more"];
    $xem = $_POST["xem"];
}

echo "<pre>";
echo print_r($_REQUEST);
echo "</pre>";

class Employee {
    
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
    <form action=""method="post">
 Hiển thị danh sách nhân sự:<br>
 <input type="text" name="usename"> <br>
 Thêm một nhân sự mới: <br>
 <input type="text" name="more"> <br>
 Xem chi tiết thông tin nhân sự: <br>
 <input type="text" name="xem"> <br>

 <button type="submit" >Tìm</button>
 </form>
</body>
</html>
