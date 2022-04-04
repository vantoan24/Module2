<?php
include './../database/database.php';
include './header.php';

$sql = "SELECT * FROM students";
// echo "<pre>";
// var_dump($sql);
// die();
$query = $connect->prepare($sql);
$query->execute();
$students = array();
// $query->setFetchMode(PDO::FETCH_OBJ);
while ($result = $query->fetchAll(PDO::FETCH_OBJ)) {
    $students = $result;
}
?>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-students.php">List Users</a></li>
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
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="add-product.php" class="btn btn-add">ADD Book</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                            <tr>
                                <th width="10%" class="sorting"><a href="#">ID</a></th>
                                <th width="20%" class="sorting"><a href="#">Name</a></th>
                                <th width="20%" class="sorting"><a href="#">Address</a></th>
                                <th width="20%" class="sorting"><a href="#">Email</a></th>
                                <th width="15%" class="sorting"><a href="#">Image</a></th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $student) : ?>
                                <tr>
                                    <td><?= $student->id ?></td>
                                    <td><?= $student->name ?></td>
                                    <td><?= $student->address ?></td>
                                    <td><?= $student->email ?></td>
                                    <td><img style="width:50px" src="<?= $student->image ?>"></td>
                                    <td><a href="./edit-student.php?&id=<?php echo $student->id ?>" class="btn btn-info">Edit</a>
                                    <a href="./delete-student.php?&id=<?php echo $student->id?>" class="btn btn-danger">Delete</a>
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