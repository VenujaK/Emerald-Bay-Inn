<?php


@include 'config.php';
// Product insert
if (isset($_POST['ADD_ROOM'])) {
   $room_availabiity = $_POST['r_availability'];
   $room_type = $_POST['r_type'];
   $room_ac = $_POST['r_ac'];
   $room_price = $_POST['r_price'];

   if (empty($room_availabiity) || empty($room_type) || empty($room_ac) || empty($room_price)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO rooms (AVAILABILITY, TYPE, AC,PRICE) VALUES('$room_availabiity', '$room_type','$room_ac','$room_price')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {        
         $message[] = 'new Room added successfully';
      } else {
         $message[] = 'could not add the Room';
      }
   }
};

// Delete option
if (isset($_GET['del'])) {
   $id = $_GET['del'];
   mysqli_query($conn, "DELETE FROM rooms  WHERE RID = $id");
   mysqli_query($conn, "ALTER TABLE products AUTO_INCREMENT = 1");
   // ALTER TABLE products AUTO_INCREMENT = 1;
   header('location:admin_page.php');
};
if (isset($_POST['view_products'])) {
  header('location:View_Rooms.php');
}

?>
<?php
   
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }

   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Page </title>
    <link rel="stylesheet" href="./CSS/admin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   
  <div class="container">
    <div class="title">Add Rooms</div>
    <div class="content">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Room Availability</span>
            <input type="text" placeholder="enter product price" name="r_availability" >
          </div>
          <div class="input-box">
            <span class="details">Room Type</span>
            <select name="r_type" class="input-box box">
               <option value="Duluxe">Duluxe</option>
               <option value="Luxury">Luxury</option>
               <option value="Normal">Normal</option>
               <option value="Villas">Villas</option>
            </select>
          </div>
          
          <div class="input-box">
            <span class="details">AC/ NON AC</span>
            <input type="text" placeholder="enter product Description" name="r_ac" >
          </div>
          <div class="input-box">
            <span class="details">Room Price</span>
            <input type="text" placeholder="enter product quantity" name="r_price" >
          </div>
          
        </div>
        
        <div class="button">
          <input type="submit" name="ADD_ROOM" value="Add product">
      <input type="submit" name="view_products" onclick="ViewAllProducts();" value="View Products">
          
        </div>
      </form>
    </div>
  </div>
  
  
   
</body>
<script>
   function ViewAllProducts(){
      window.location.href =  "/Daisy_Wardrobe/View_products.php";
   }
</script>
</html>
