<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
require('config.php');

$fetch = "SELECT * FROM `category` where status = '0' ";

$data = mysqli_query($connection, $fetch);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trash Category</title>
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Trash Category</h2>
                <hr>
                <table class="table table-warning">
                    <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Restore</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($data)) {

                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $row['id'] ?>
                                </th>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['type'] ?>
                                </td>
                                <td>
                                    <?php echo $row['des'] ?>
                                </td>
                                <td><a href="restorecat.php?id=<?php echo $row['id']; ?>"
                                        class="btn btn-primary">Restore</a></td>
                                <td><a href="deletecat.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                                <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>