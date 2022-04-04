<?php include './Layouts/header.php' ?>
<h1>Xóa Mặt Hàng</h1>
<h5>Bạn có chắc chắn muốn xóa mặt hàng <?php echo $product->TENHANG ?></h5>
<from action="delete" method="POST">
    <div class="row form-group mt-2 justify-content-end">
        <div class="col-md">
            <button type="submit" class="btn" onclick="alert" value="Xóa mặt hàng" class="btn btn-success">Xóa mặt hàng</button>
            <a href="index.php?controller=product&action=index" class="btn btn-success">Thoát</a>
        </div>
    </div>
</from>