<?php
include './Layouts/header.php';?>
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center mt-5 mb-5">Kết Quả Tìm Kiếm Mặt Hàng</h1>
        <div class="col-md-8">
            <a href="index.php?controller=product&action=index" class="btn btn-success mt-1" style="width: 25%">Xem danh sách đặt hàng</a>
            <form method="POST" action="index.php?controller=product&action=search">
                <div class="row mt-2">
                    <div class="col-md-2">                    
                    </div>
                </div>
            </form>
            <?php if(COUNT($products) ==0 ){
            echo 'Không tìm thấy kết quả';
             } ?>
            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-striped text-center table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Tên hàng</th>
                            <th>Loại hàng</th>
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
                                        <a href="index.php?controller=product&action=delete&id=<?= $product->MAHANG ?>" onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './Layouts/footer.php'?>