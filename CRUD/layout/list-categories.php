<?php
include './../database/database.php';
include './header.php';

$sql = "SELECT * FROM categories";
// echo "<pre>";
// var_dump($sql);
// die();
$query = $connect->prepare($sql);
$query->execute();
$categories = array();
// $query->setFetchMode(PDO::FETCH_OBJ);
while ($result = $query->fetchAll(PDO::FETCH_OBJ)) {
    $categories = $result;
}

?>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-categories.php">List Categories</a></li>
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
                    <h1>Categories Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-category.php" class="btn btn-add">Add Category</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                            <tr>
                                <th class="sorting"><a href="#">ID</a></th>
                                <th  class="sorting"><a href="#">Category Name</a></th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>

                            <tr>
                                <td><?php echo $category->id; ?></td>
                                <td><?= $category->name; ?></td>
                                <td><a href="edit-categories.php?&id=<?php echo $category->id?>" class="btn btn-info">Edit</a>
                                <a href="delete-categories.php?&id=<?php echo $category->id?>" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                                        
                       
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