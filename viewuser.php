<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
require('config.php');

$fetch = "SELECT * FROM `user` where Status = '1' ";

$data = mysqli_query($connection, $fetch);

$limit = 4;
if(isset($_GET['page'])){
  
  $getpgno = $_GET['page'];
}else{
  $getpgno = 1;
}
$offset = ($getpgno - 1) * $limit;

$fetch = "SELECT * FROM `user` where status = '1' limit {$offset}, {$limit}";

$data = mysqli_query($connection, $fetch);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
                <table class="table table-warning">
                    <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Update</th>
                            <th scope="col">Trash</th>
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
                                    <?php echo $row['fname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['lname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td><a href="updateuser.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                                </td>
                                <td><a href="trash.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Trash</a></td>
                                <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

    <?php
        $fetchpage = "SELECT * from user";
        $query = mysqli_query($connection, $fetchpage);
        
          if(mysqli_num_rows($query) > 0){
            $totalRecords = mysqli_num_rows($query);
            $totalpages = ceil($totalRecords / $limit);
            echo '<ul class="pagination">';
            if($getpgno > 1){
              echo '<li class="page-item"><a class="page-link" href="viewuser.php?page='.($getpgno - 1).'">prev</a></li>';

            }
            for($i = 1; $i <= $totalpages; $i++){
              $active = $i == $getpgno? "active" : "";
              echo '<li class="'.$active.' page-item"><a class="page-link" href="viewuser.php?page='.$i.'">'.$i.'</a></li>';
            }
            if($getpgno < $totalpages){
              echo '<li class="page-item"><a class="page-link" href="viewuser.php?page='.($getpgno + 1).'">next</a></li>';

            }

          }
        
      
      
      ?>




<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->
</body>

</html>










<?php
include('admin/includes/footer.php');


?>