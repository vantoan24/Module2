<?php
include './../database/database.php';
include './header.php';
$sql = "SELECT * FROM books";
// echo "<pre>";
// var_dump($sql);
// die();
$query = $connect->prepare($sql);
$query->execute();
$books = array();
// $query->setFetchMode(PDO::FETCH_OBJ);
while ($result = $query->fetchAll(PDO::FETCH_OBJ)) {
    $books = $result;
}
?>
<div class="content">
    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-books.php">List Products</a></li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">
            <div class="span12 search">
                <form>
                    <input type="text" class="span11" placeholder="Some text for search..." name="search" />
                    <button class="btn span1" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Products Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-product.php" class="btn btn-add">Add Book</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                            <tr>
                                <th class="sorting"><a href="#">ID</a></th>
                                <th class="sorting"><a href="#">Name</a></th>
                                <th class="sorting"><a href="#">Images</a></th>
                                <th class="sorting"><a href="#">Activate</a></th>
                                <th class="sorting"><a href="#">Category_id</a></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($books as $product) : ?>
                                <tr>
                                    <td><?= $product->id ?></td>
                                    <td><?= $product->name ?></td>
                                    <td><img style="width:50px" src="<?= $student->images ?>"></td>
                                    <td><?= $product->activate ?></td>
                                    <td><?= $product->category_id ?></td>
                                    <td><a href="./edit-product.php?&id=<?php echo $product->id ?>" class="btn btn-info">Edit</a>
                                    <a href="./delete-product.php?&id=<?php echo $product->id?>" class="btn btn-danger">Delete</a>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="bulk-action">
                    </div><!-- /bulk-action-->
                    <div class="dataTables_paginate">
                        <a class="first paginate_button paginate_button_disabled" href="#">First</a>
                        <a class="previous paginate_button paginate_button_disabled" href="#">Previous</a>
                        <span>
                            <a class="paginate_active" href="#">1</a>
                            <a class="paginate_button" href="#">2</a>
                        </span>
                        <a class="next paginate_button" href="#">Next</a>
                        <a class="last paginate_button" href="#">Last</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>
<?php include './footer.php'; ?>