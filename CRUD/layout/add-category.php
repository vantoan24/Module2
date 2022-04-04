<?php
include './../database/database.php'; 
include './header.php'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
$sql = "INSERT INTO categories(name) VALUES('$name')";
// echo "<pre>";
// var_dump($sql);
// die();
$connect->exec($sql);
};
?>

<div class="content">
    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-categories.php">List Categories</a> <span class="divider">></span></li>
            <li class="active">Add</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Categories Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form method="post">
                    	<div class="row-form">
                            <div class="span3">Category Name:</div>
                            <div class="span9"><input name="name" type="text" placeholder="some text value..."/></div>
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

<?php include './footer.php'; ?>