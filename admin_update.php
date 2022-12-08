<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_rooms'])){

  $room_availabiity = $_POST['r_availability'];
   $room_type = $_POST['r_type'];
   $room_ac = $_POST['r_ac'];
   $room_price = $_POST['r_price'];


   if (empty($room_availabiity) || empty($room_type) || empty($room_ac) || empty($room_price)) {
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE rooms SET AVAILABILITY='$room_availabiity', TYPE='$room_type', AC='$room_ac',PRICE='$room_price' WHERE RID = '$id'";
      $upload = mysqli_query($conn, $update_data);
      // echo $update_data;

      if($upload){
         header('location:admin_page.php');
      }else{
         $message[] = 'Something went Wrong!'; 
      }

   }
};
if (isset($_POST['view_rooms'])) {
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
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="./CSS/admin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

   
  <div class="container">
    <div class="title">Update Rooms</div>
    <div class="content">
    <?php
      
      $select = mysqli_query($conn, "SELECT * FROM rooms WHERE RID = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Room Availability</span>
            <input type="text" placeholder="enter yes or no" name="r_availability" >
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
            <input type="text" placeholder="enter yes or no" name="r_ac" >
          </div>
          <div class="input-box">
            <span class="details">Room Price</span>
            <input type="text" placeholder="enter room price" name="r_price" >
          </div>
          
        </div>
        
        <div class="button">
          <input type="submit" value="update Room" name="update_rooms">
          <input type="submit" name="view_rooms" value="View Products">
        </div>
      </form>
      <?php };?>
      
    </div>
  </div>
</body>
</html>