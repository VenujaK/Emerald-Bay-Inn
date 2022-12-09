<?php


@include 'config.php';
// Product insert
if (isset($_POST['BOOK_ROOM'])) {
   $sname = $_POST['s_type'];
   $cname = $_POST['c_name'];
   $days = $_POST['c_days'];
   $date = $_POST['c_date'];
   $Peoplecount = $_POST['s_people'];
   $contact = $_POST['c_no'];

   if (empty($sname) || empty($cname) || empty($days) || empty($date) || empty($Peoplecount) || empty($contact) ) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO serviceregister (SNAME, CNAME, DAYS, DATE, COUNT, CONTACT) VALUES('$sname', '$cname','$days','$date','$Peoplecount','$contact')";
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
    <title> Service Register </title>
    <link rel="stylesheet" href="./CSS/admin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Book Services</div>
    <div class="content">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Service</span>
            <select name="s_type" class="input-box box">
               <option value="Day_Out">Day Out</option>
               <option value="Birth_Day_Party">Birth Day Party</option>
               <option value="Weddings">Weddings</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Customer Name</span>
            <input type="text" placeholder="enter your name" name="c_name" >
          </div>
          <div class="input-box">
            <span class="details">No. Of Days</span>
            <input type="text" placeholder="enter No. Of Days" name="c_days" >
          </div>
          <div class="input-box">
            <span class="details">DATE</span>
            <input type="text" placeholder="enter the date" name="c_date" >
          </div>
          <div class="input-box">
            <span class="details">No of People</span>
            <input type="text" placeholder="enter number of people" name="s_people" >
          </div>
          <div class="input-box">
            <span class="details">Contact No</span>
            <input type="text" placeholder="enter contact number" name="c_no" >
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
      window.location.href =  "./Emerald-Bay-Inn/View_Rooms.php";
   }
</script>
</html>
