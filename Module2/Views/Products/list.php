<?php include './Layouts/header.php'?>

<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5">Danh sách mặt hàng</h1>
        <div class="col-md-8">
            <form method="POST" action="index.php?controller=product&action=search">
                <div class="row mt-5 justify-content-end">
                    <div class="col-md-2">
                        <a href="index.php?controller=product&action=add" class="btn btn-success" style="width: 100%">Thêm mới</a>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Tên" name="search">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="Tìm kiếm" class="form-control btn btn-success">
                    </div>
                </div>
            </form>
            <!-- <?php echo (isset($alert)) ? $alert : ""; ?>
            <?php if(COUNT($products) ==0 ){
            echo 'Không tìm thấy kết quả';
             } ?> -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Tác vụ</th>
                        </tr>
                        <?php foreach ($products as $key => $product) :  ?>
                                <tr>
                                    <td>
                                        <?= $key+1 ?>
                                    </td>
                                    <td>
                                        <?= $product->TENHANG ?>
                                    </td>
                                    <td>
                                        <?= $product->LOAIHANG ?>
                                    </td>
                                    <td>
                                        <a href="index.php?controller=product&action=edit&id=<?= $product->MAHANG ?>"><i class="fas fa-edit fa-lg text-warning"></i></a>
                                        <a href="index.php?controller=product&action=delete&id=<?= $product->MAHANG ?>" onclick="return confirm('Bạn có muốn xóa mặt hàng <?= $product->TENHANG?>')"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                        
                                </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>