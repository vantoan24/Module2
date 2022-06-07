<?php
include './layout/navar.php';
include './layout/header.php'?>
<div class="container-fluid">
    <h1 class="text-center mt-5">Thêm mới ghi chú</h1>
    <div class="row mt-2 justify-content-center">
        <div class="col-md-6"> -->
            <form method="post" action="">
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label>Phân loại</label>
                    </div>
                    <div class="col-md-10">
                    <select name="type_id" class="form-control">
                              <option value="">Chọn loại</option>
                            <?php foreach ($notestypes as $notestype): ?>
                                <option value="<?php echo $notestype->id?>"><?php echo $notestype->name; ?></option>
                              <?php endforeach; ?>  
                        </select>                     
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label>Tiêu đề</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="">
                        <p class="text-danger"></p>
                    </div>
                </div>
                <div class="row form-group mt-2">
                    <div class="col-md-2">
                        <label>Nội dung</label>
                    </div>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="content" value="">
                    </div>
                </div>
                <div class="row form-group mt-2 justify-content-end">
                    <div class="col-md-10">
                        <input type="submit" value="Thêm" class="btn btn-primary">
                        <a href="index.php?controller=Note&action=index" class="btn btn-secondary">Hủy</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>