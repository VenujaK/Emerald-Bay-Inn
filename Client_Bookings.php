<?php


@include 'config.php';
$id = $_GET['edit'];
// Product insert
if (isset($_POST['BOOK_ROOM'])) {
   $rnumber = $_POST['r_no'];
   $cname = $_POST['c_name'];
   $cnumber = $_POST['c_no'];
   $nic = $_POST['c_nic'];
   $cdays = $_POST['c_days'];

   if (empty($rnumber) || empty($cname) || empty($cnumber) || empty($nic) || empty($cdays) ) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO bookings (RNO, CNAME, CNUMBER	,NIC ,CDAYS) VALUES('$rnumber', '$cname','$cnumber','$nic','$cdays')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {        
        header('location:Thanks.php');
        echo '<script>alert("Booking Succesfull")</script>';
      } else {
         $message[] = 'could not book the Room';
      }
   }
};



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
    <title> Client Bookings </title>
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
            <span class="details">Room Number</span>
            <input type="text" placeholder="enter Room number" name="r_no" value="<?php echo $id?>">
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="enter your name" name="c_name" >
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" placeholder="enter contact number" name="c_no" >
          </div>
          <div class="input-box">
            <span class="details">NIC</span>
            <input type="text" placeholder="enter NIC number" name="c_nic" >
          </div>
          <div class="input-box">
            <span class="details">No of Days</span>
            <input type="text" placeholder="enter number of days" name="c_days" >
          </div>
          
        </div>
        
        <div class="button">
          <input type="submit" name="BOOK_ROOM" value="Book Now">
      
          
        </div>
      </form>
    </div>
  </div>
  
  
   
</body>
<script>
   function ViewAllRooms(){
      window.location.href =  "./Emerald-Bay-Inn/Thanks.php";
   }
</script>
</html>
