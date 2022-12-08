<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Products</title>
   <link rel="stylesheet" href="./CSS/View_Rooms.css">
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="./CSS/Style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
   <?php


   @include 'Config.php';
   ?>
   <?php @include("./Components/Header.php") ?>
   <?php

   //   Queries
   $select = mysqli_query($conn, "SELECT * FROM rooms");

   
   // Delete option
   if (isset($_GET['del'])) {
      $id = $_GET['del'];
      mysqli_query($conn, "DELETE FROM rooms  WHERE RID = $id");
      mysqli_query($conn, "ALTER TABLE rooms AUTO_INCREMENT = 1");
      // ALTER TABLE products AUTO_INCREMENT = 1;
      header('location:View_Rooms.php');
   };
   ?>
   <!-- Product table -->
   <div class="products">
      <table class="tblproduct">
         <form method="POST">
            <thead>
               <tr>
                  <th>RID</th>
                  <th>Availability</th>
                  <th>Type</th>
                  <th>AC / Non AC</th>
                  <th>Price</th>
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['RID']; ?></td>
                  <td><?php echo $row['AVAILABILITY']; ?></td>
                  <td><?php echo $row['TYPE'] ?>/-</td>
                  <td><?php echo $row['AC'] ?>/-</td>
                  <td><?php echo $row['PRICE'] ?>/-</td>
                  <td>
                     <a href="admin_update.php?edit=<?php echo $row['RID']; ?>" class="buttons"> <i class="fas fa-edit"></i> Update </a>
                     <a href="View_Rooms.php?del=<?php echo $row['RID']; ?>" class="buttons"> <i class="fas fa-trash"></i> Delete </a>
                  </td>
               </tr>
            <?php } ?>
      </table>
      </form>
   </div>

   </div>





</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>