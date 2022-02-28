<?php
$english = [
    "hello" => "xin chào",
    "computer" => "máy tính ",
    "book" => "sách",
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($english as $word => $english) {
        if ($word == $searchWord) {
            echo "Từ:" . $word . ". <br/>Nghĩa của từ: " . $english;
            echo "<br>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tìm.";
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
    <style>
        input [type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h2> Từ Điển Anh Việt </h2>
    <form action="" method="POST">
        <input type="text" name="search" placeholder="Nhập Từ Cần Tìm" />
        <input type="submit" id="submit" value="Tìm" />
    </form>
</body>

</html>