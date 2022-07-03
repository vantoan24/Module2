<?php
include 'connect.php';

extract($_POST);
if(isset($_POST['nameVal']) && $_POST['numberVal'] && $_POST['emailVal'] && $_POST['addressVal']){

    $sql = "INSERT INTO `crud` (`id`, `name`, `number`, `email`, `address`) VALUES
    (NULL, '$nameVal', '$numberVal', '$emailVal', '$addressVal')";

    $result = mysqli_query($con,$sql);
}
