<?php 
    $result = '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $a = isset($_POST['a']);
        $b = isset($_POST['b']);

        if( $a==''){
            $result = 'Mời bạn nhập số';
        }else if( $a == 0){
            $result ='Mời bạn nhập số lớn hơn 0';
        }else if( $b== ''){
            $result ='Mời bạn nhập số';
        }else{
            $result = -($b) /$a;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Giải phương trình bậc nhất</h1>
        <form method="POST" action="">
            <input type="text" style="width: 20px" name="a" value=""/>x 
            +
            <input type="text" style="width: 20px" name="b" value=""/> = 0
            <br>
            <input type="submit" value="Tính" >
        </form>
        <?php echo $result; ?>
    </body>
</html>