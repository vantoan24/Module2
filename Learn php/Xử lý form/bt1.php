<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - xử lý form với GET</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>freetuts.net - ứng dụng tìm năm sinh</h1>
        <form method="get" action="">
            <input type="text" name="year" value=""/>
            <input type="submit" name="btn" value="Tìm Tuổi"/>
        </form>
        <?php 
            if (!empty($_GET['btn'])){
                // Bước 1: Lấy thông tin
                $year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
 
                // Bước 2: Lấy năm hiện tại
                $current_year = date('Y');
 
                // Bước 2: Kiểm tra năm sinh hợp lệ hay không, nếu không thì thông báo
                if ($year <= 0){
                    echo 'Năm sinh bạn nhập không hợp lệ';
                }
                else if ($year > $current_year){
                    echo 'Năm sinh bạn nhập lớn hơn năm hiện tại';
                }
                else{
                    echo 'Số tuổi của bạn là ' . ($current_year - $year);
                }
            }
        ?>
    </body>
</html>