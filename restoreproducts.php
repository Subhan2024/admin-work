<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "UPDATE `products` SET pstatus = '1' where pid = $user_id";

$result = mysqli_query($connection, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:Viewproducts.php');
?>