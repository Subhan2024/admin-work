<?php
include 'config.php';

$user_id = $_POST['id'];
$user_name = $_POST['name'];
$user_lname = $_POST['type'];
$user_email = $_POST['des'];
$update = "update `category` set name ='$user_name' ,type ='$user_lname' , des = '$user_email' where id = '$user_id' ";
$res = mysqli_query($connection, $update);
if (!$res) {
    die("Query failed");
}
header('location:viewcat.php');
?>