<?php 
 include './../database/database.php';
 if ($_GET && $_GET['id']) {
    $sql = "SELECT * FROM students WHERE id = '" . $_GET['id'] . "'";
    $query = $connect->prepare($sql);
    $query->execute();
    $student = array();
    while ($result = $query->fetch(PDO::FETCH_OBJ)) {
        $student = $result;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "DELETE FROM students WHERE id = '" . $_GET['id'] . "'";
    $connect->exec($sql);
    header('Location: http://localhost:8080/Module2/CRUD/layout/list-students.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Delete page</title>
</head>
<br>
<h1 style="text-align: center;">Delete <?= $student->name ?>?</h1>
<br>
<form class="container" method="post">
    <div style="text-align: center" class="form-group">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a class="btn btn-primary" href="list-students.php">Back</a>
    </div>
</form>