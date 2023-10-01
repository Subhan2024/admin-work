<?php
include 'config.php';

$user_id = $_POST['id'];
$user_name = $_POST['pname'];
$user_gender = $_POST['pdesc'];
$user_genders = $_POST['price'];
// $pimage = $_FILES['pimage'];
$pimage = $_FILES['pimage']['name'];
$pimage_tmp = $_FILES['pimage']['tmp_name'];
$pimage_size = $_FILES['pimage']['size'];
// print_r($_POST);
// print_r($resu);
// die();

$updates = "UPDATE `products` SET `pname`='$user_name',`pdescription`='$user_gender',`price`='$user_genders',`image`='$pimage' WHERE pid ='$user_id'";
move_uploaded_file($pimage_tmp, 'img/' . $pimage);
$resu = mysqli_query($connection , $updates);
if (!$resu) {
    die("Query failed");
}
header('location:Viewproducts.php');
?>