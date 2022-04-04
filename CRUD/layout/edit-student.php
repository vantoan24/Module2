<?php
include './../database/database.php';
include './header.php';
if ($_GET && $_GET['id']) {
    $sql = "SELECT * FROM students WHERE id = '" . $_GET['id'] . "'";
    $query = $connect->prepare($sql);
    $query->execute();
    $student = array();
    while ($result = $query->fetch(PDO::FETCH_OBJ)) {
        $student = $result;
    }
}
if ($_POST && $_POST['name'] && $_POST['address'] && $_POST['email'] && $_POST['image']) {
    $sql = "UPDATE students SET name ='" . $_POST['name'] . "',
    address ='" . $_POST['address'] . "',
    email ='" . $_POST['email'] . "',
    image='" . $_POST['image'] . "' WHERE id = '" . $_POST['id'] . "'";
    // echo "<pre>";
    // var_dump($sql);
    // die();
    $connect->exec($sql);
    header('Location: http://localhost:8080/Module2/CRUD/layout/list-students.php');
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = $_POST['name'];
//     $address = $_POST['address'];
//     $email = $_POST['email'];
//     $image = $_POST['image'];
//     $sql = "INSERT INTO students(name,address,email,image) VALUES('$name','$address','$email','$image' )";
//     // echo "<pre>";
//     // var_dump($sql);
//     // die();
//     $connect->exec($sql);
//     header('Location: http://localhost:8080/Module2/CRUD/layout/list-students.php');
// }
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
                    <h1>Users Student</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    <form method="post">
                    <input name="id"  type="hidden" value="<?php echo $student->id ?> "/>
                        <div class="row-form">
                            <div class="span3">Name:</div>
                            <div class="span9"><input name="name" type="text" placeholder="some text value..."  value="<?php echo $student->name ?>"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Email:</div>
                            <div class="span9"><input name="email" type="text" placeholder="some text value..."  value="<?php echo $student->email ?>" /></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Address:</div>
                            <div class="span9"><input name="address" type="text" placeholder="some text value..."  value="<?php echo $student->address ?>"/></div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Images</div>
                            <div class="span9"><input name="image" type="text" name="image" size="19"  value="<?php echo $student->image ?>"></div>
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