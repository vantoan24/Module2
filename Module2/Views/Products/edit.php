<?php
include './Layouts/header.php'?>
<div class="container-fluid">
    <h1 class="text-center mt-5">Sửa mặt hàng</h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6">
            <form method="post" action="">
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Tên Hàng</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="TENHANG" value="<?php echo $product->TENHANG ?>" required>
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Loại Hàng</label>
                    </div>
                    <div class="col-md-10">
                        <select name="LOAIHANG" class="form-select">
                        <option>Điện thoại</option>
                            <option>Điều hòa</option>
                            <option>Tủ lạnh</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Giá</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="GIA" value="<?php echo $product->GIA?>" required>
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Số Lượng</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="SOLUONG" value="<?php echo $product->SOLUONG?>" required>
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label class="fw-bold">Mô tả</label>
                    </div>
                    <div class="col-md-10">
                        <textarea type="text" required class="form-control" name="MOTAMATHANG" rows="4"><?php echo $product->MOTAMATHANG ?></textarea>
                        <p class="text-danger"></p>
                    </div>
                </div>

                <div class="row form-group mt-2 justify-content-end">
                    <div class="col-md-10">
                        <input type="submit" value="Sửa mặt hàng" class="btn btn-success">
                        <a href="index.php?controller=product&action=index" class="btn btn-success">Thoát</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>