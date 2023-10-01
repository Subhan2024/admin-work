<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');
$fetching = "SELECT * from `products` as p INNER JOIN category as c on p.pcategory = c.id where p.pstatus = '1' ";
$data = mysqli_query($connection, $fetching);
if (mysqli_num_rows($data) > 0) {

$limit = 4;
if(isset($_GET['page'])){
  
  $getpgno = $_GET['page'];
}else{
  $getpgno = 1;
}
$offset = ($getpgno - 1) * $limit;

$fetch = "SELECT * FROM `products` where pstatus = '1' limit {$offset}, {$limit}";

$data = mysqli_query($connection, $fetch);
?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>

<body>
    
    <!-- Outer Row -->
    <div class="Page Wrapper">
    <div class="Content Wrapper">
        
            
        <div class="container">
            
            <!-- Outer Row -->
            <div class="row justify-content-center">
                
                <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="Main Content">
                <h2>View Products</h2>
                <hr>
                <table class="table table-warning">
                    <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">category</th>
                            <th scope="col">Description</th>
                            <th scope="col">price</th>
                            <th scope="col">Image</th>
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
                                    <?php echo $row['pid'] ?>
                                </th>
                                <td>
                                    <?php echo $row['pname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pcategory'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pdescription'] ?>
                                </td>
                                <td>
                            <?php echo $row['price'] ?>
                        </td>
                        <td>
                            <img src="<?php echo 'img/' . $row['image'] ?>" alt="" height="50px" width="50px">

                        </td>
                                <td><a href="updateproducts.php?id=<?php echo $row['pid']; ?>" class="btn btn-success">Update</a>
                                </td>
                                <td><a href="trashproduct.php?id=<?php echo $row['pid']; ?>" class="btn btn-danger">Trash</a></td>
                                <?php
                        }
                    }
                        ?>
                    </tbody>
                </table>

                <?php
        $fetchpage = "SELECT * from products";
        $query = mysqli_query($connection, $fetchpage);
        
          if(mysqli_num_rows($query) > 0){
            $totalRecords = mysqli_num_rows($query);
            $totalpages = ceil($totalRecords / $limit);
            echo '<ul class="pagination">';
            if($getpgno > 1){
              echo '<li class="page-item"><a class="page-link" href="viewproducts.php?page='.($getpgno - 1).'">prev</a></li>';

            }
            for($i = 1; $i <= $totalpages; $i++){
              $active = $i == $getpgno? "active" : "";
              echo '<li class="'.$active.' page-item"><a class="page-link" href="viewproducts.php?page='.$i.'">'.$i.'</a></li>';
            }
            if($getpgno < $totalpages){
              echo '<li class="page-item"><a class="page-link" href="viewproducts.php?page='.($getpgno + 1).'">next</a></li>';

            }

          }
        
      
      
      ?>

    








        <?php
include('admin/includes/footer.php');


?>