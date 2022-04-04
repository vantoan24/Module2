<?php 
include './../database/database.php';
include './header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $images = $_POST['image'];
    $actiave = $_POST['actiave'];
    $category_id = $_POST['category_id'];
$sql ="INSERT INTO students(name,category_id,email,images) VALUES('$name','$images','$actiave','$category_id' )";
// echo "<pre>";
// var_dump($sql);
// die();
$connect ->exec($sql);
header('Location: http://localhost:8080/Module2/CRUD/layout/list-books.php');
}
?>
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href="list-users.html">List Users</a> <span class="divider">></span></li>
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
                    	<div class="row-form">
                            <div class="span3">Name:</div>
                            <div class="span9"><input name="name"  type="text" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span3">Images</div>
                            <div class="span9"><input name ="images" type="text" name="image" size="19"></div>
                            <div class="clear"></div>
                    	<div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9"><input name ="actiave" type="text" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Category_id:</div>
                            <div class="span9"><input name="category_id"  type="text" placeholder="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 
                        </div>                                                                      
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Create</button>
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

<?php include './footer.php'?>
