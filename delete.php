<?php
include('config.php');
$user_id = $_GET['id'];

$delete = "DELETE from `user` where id = '$user_id'";

$result = mysqli_query($connection, $delete);

if (!$delete) {
    die("Query Failed");
}
header('location:viewuser.php');
?>