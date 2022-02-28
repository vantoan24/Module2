<?php
$customer =[
    1=>[
        "ten"=> "Huỳnh Văn Toàn",
        "ngaysinh"=>'24-09-2002',
        "diachi"=>"03 Bùi Dục Tài",
        "anh"=>"https://scontent.fhan2-4.fna.fbcdn.net/v/t1.6435-9/185870463_860396941500115_9109639779667877872_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=0debeb&_nc_ohc=XDMq5DhWe1EAX_Ac--W&_nc_ht=scontent.fhan2-4.fna&oh=00_AT9W3WZ6WRJyl-7maWWvEC7apKyoGHCYCa3B6wvjyUnRPA&oe=623B90C1"
    ]
        ] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($customer as $key=>$value):?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten'] ?></td>
        <td><?php echo $value['ngaysinh'] ?></td>
        <td><?php echo $value['diachi'] ?></td>
        <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
    </tr>
<?php endforeach; ?> 
    </tbody>
</table>
</body>
</html>