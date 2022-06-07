<?php
include 'connect.php';
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $sql = "DELETE FROM `crud` WHERE `crud`.`id` = $id";
    $result = mysqli_query($con,$sql);
}

?>