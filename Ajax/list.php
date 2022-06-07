<?php
include 'connect.php';
if(isset($_POST['ListShow'])){
    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên</th>
        <th scope="col">SĐT</th>
        <th scope="col">Email</th>
        <th scope="col">Địa Chỉ</th>
        <th scope="col">Chức Năng</th>
      </tr>
    </thead>';
    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($con,$sql);
    $key = 1;
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $number = $row['number'];
        $email = $row['email'];
        $address = $row['address'];
        $table.='<tr>
        <th scope="row">'.$key.'</th>
        <td>'.$name.'</td>
        <td>'.$number.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>
            <button class="btn btn-dark" class="show" type="button" onclick="show('.$id.')">Cập Nhật</button>
            <button class="btn btn-danger"type="button" onclick="Delete('.$id.')">Xóa</button>
        </td>
        </tr>';
        $key++;
    }
    $table.='</table>';
    echo $table;
}
?>