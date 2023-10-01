<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "DELETE from `products` where pid = '$user_id'";

$result = mysqli_query($connection, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:viewproducts.php');
?>