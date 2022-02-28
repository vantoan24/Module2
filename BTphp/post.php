<?php
    echo"<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
    //Kiem tra neu nguoi dung da gui du lieu len
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //CODE xu ly khi nguoi dung gui du lieu len
        $username=$_POST["username"];
        $password=$_POST["password"];
        //lay du lieu ơ _SERVER len
        echo 'xin chao'.$username.'<br>';
        //lay 
        echo 'Mật Khẩu của bạn la'.$password;
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
<form action="" method="POST" enctype="multipart/form-data">
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br>
        <input type="file" name="avatar">

        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>