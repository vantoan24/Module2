<h3>Ban co muon xoa san pham: <?php echo $product->TENHANG?></h3>
<form method="post">
    <input name="id"  type="hidden" value="<?php echo $product->MAHANG ?>"/>
    <div class="row-form">
        <button class="btn btn-success" type="submit">DELETE</button>
    </div>
</form>