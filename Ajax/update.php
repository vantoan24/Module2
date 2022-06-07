<?php
include 'connect.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

   $sql = "SELECT * FROM `crud` WHERE id =$id";
   $result = mysqli_query($con, $sql);
    $reponse = array();
   while($row = mysqli_fetch_assoc($result)){
        $reponse =$row;
            // $id = $row['id'];
            // $name = $row['name'];
            // $number = $row['number'];
            // $email = $row['email'];
            // $address = $row['address'];
    //   echo "<pre>";
    //   print_r($row);
    //   die();
   }
   echo json_encode($reponse);
}

extract($_POST);
if(isset($_POST['nameVal']) && $_POST['numberVal'] && $_POST['emailVal'] && $_POST['addressVal']  && $_POST['idVal']){

    $sql = "UPDATE `crud` SET `name` = '$nameVal', `number` = '$numberVal', `email` = '$emailVal', `address` = '$addressVal'
     WHERE `crud`.`id` = $idVal;";

    $result = mysqli_query($con,$sql);
}
?>
