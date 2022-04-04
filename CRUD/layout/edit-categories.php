<?php
include './../database/database.php';
include './header.php';
if ($_GET && $_GET['id']) {
    $sql = "SELECT * FROM categories WHERE id = '" . $_GET['id'] . "'";
    $query = $connect->prepare($sql);
    $query->execute();
    $category = array();
    while ($result = $query->fetch(PDO::FETCH_OBJ)) {
        $category = $result;
    }
}
if ($_POST && $_POST['name'] ) {
    $sql = "UPDATE categories SET name ='" . $_POST['name'] . "' WHERE id = '" . $_POST['id'] . "'";
    // echo "<pre>";
    // var_dump($sql);
    // die();
    $connect->exec($sql);
    header('Location:http://localhost:8080/Module2/CRUD/layout/list-categories.php');
}
?>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-categories.php">List Category</a> <span class="divider">></span></li>
            <li class="active">Add</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form method="post">
                    <input name="id"  type="hidden" value="<?php echo $category->id; ?> "/>
                        <div class="row-form">
                            <div class="span3">Name:</div>
                            <div class="span9"><input name="name" type="text" placeholder="some text value..."  value="<?php echo $category->name ?>"/></div>
                            <div class="clear"></div>
                        </div>                        
                        <div class="row-form">
                            <button class="btn btn-success" type="submit">UPDATE</button>
                            <div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>

<?php include './footer.php' ?>