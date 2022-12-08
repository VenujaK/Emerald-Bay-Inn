<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_des = $_POST['product_des'];
   $product_qty = $_POST['product_qty'];
   $product_cat= $_POST['product_cat'];
   $product_image1 = $_FILES['product_image1']['name'];
   $product_image2 = $_FILES['product_image2']['name'];
   $product_image3 = $_FILES['product_image3']['name'];
   $product_image4 = $_FILES['product_image4']['name'];
   $product_image5 = $_FILES['product_image5']['name'];
   $product_image_tmp_name1 = $_FILES['product_image1']['tmp_name'];
   $product_image_tmp_name2 = $_FILES['product_image2']['tmp_name'];
   $product_image_tmp_name3 = $_FILES['product_image3']['tmp_name'];
   $product_image_tmp_name4 = $_FILES['product_image4']['tmp_name'];
   $product_image_tmp_name5 = $_FILES['product_image5']['tmp_name'];
   $product_image_folder1 = 'uploaded_img/'.$product_image1;
   $product_image_folder2 = 'uploaded_img/'.$product_image2;
   $product_image_folder3 = 'uploaded_img/'.$product_image3;
   $product_image_folder4 = 'uploaded_img/'.$product_image4;
   $product_image_folder5 = 'uploaded_img/'.$product_image5;

   if (empty($product_name) || empty($product_price) || empty($product_des) || empty($product_qty) || empty($product_cat) || empty($product_image1)) {
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE products SET pname='$product_name', price='$product_price', pqty='$product_qty',category='$product_cat', discription='$product_des', pimage1='$product_image1' , pimage2='$product_image2' , pimage3='$product_image3' , pimage4='$product_image4' , pimage5='$product_image5'   WHERE pid = '$id'";
      $upload = mysqli_query($conn, $update_data);
      // echo $update_data;

      if($upload){
         move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
         move_uploaded_file($product_image_tmp_name2, $product_image_folder2);
         move_uploaded_file($product_image_tmp_name3, $product_image_folder3);
         move_uploaded_file($product_image_tmp_name4, $product_image_folder4);
         move_uploaded_file($product_image_tmp_name5, $product_image_folder5);
         header('location:admin_page.php');
      }else{
         $message[] = 'Something went Wrong!'; 
      }

   }
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
    <div class="title">update the product</div>
    <div class="content">
    <?php
      
      $select = mysqli_query($conn, "SELECT * FROM products WHERE pid = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product Name</span>
            <input type="text" placeholder="enter product name" value="<?php echo $row['pname']; ?>" name="product_name" required>
          </div>
          <div class="input-box">
            <span class="details">Product Price</span>
            <input type="text" placeholder="enter product price" value="<?php echo $row['price']; ?>" name="product_price" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" placeholder="enter product Description" value="<?php echo $row['discription']; ?>" name="product_des" required>
          </div>
          <div class="input-box">
            <span class="details">Quantity</span>
            <input type="text" placeholder="enter product quantity" value="<?php echo $row['pqty']; ?>" name="product_qty" required>
          </div>
          <select name="product_cat" class="input-box box">
               <option value="Mens_Ware">Men's Ware</option>
               <option value="Womens_Ware"> Women's Ware</option>
               <option value="Kids_Ware">Kid's Ware</option>
               <option value="Footware">Footware</option>
            </select>
          <div class="input-box">
            <span class="details">Product Image 1</span>
            <input type="file" accept="image/png, image/jpeg, image/jpg, image/jfif, image/webp" name="product_image1" class="box">
          </div>
          <div class="input-box">
            <span class="details">Product Image 2</span>
            <input type="file" accept="image/png, image/jpeg, image/jpg, image/jfif, image/webp" name="product_image2" class="box">
          </div>
          <div class="input-box">
            <span class="details">Product Image 3</span>
            <input type="file" accept="image/png, image/jpeg, image/jpg, image/jfif, image/webp" name="product_image3" class="box">
          </div>
          <div class="input-box">
            <span class="details">Product Image 4</span>
            <input type="file" accept="image/png, image/jpeg, image/jpg, image/jfif, image/webp" name="product_image4" class="box">
          </div>
          <div class="input-box">
            <span class="details">Product Image 5</span>
            <input type="file" accept="image/png, image/jpeg, image/jpg, image/jfif, image/webp" name="product_image5" class="box">
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="update product" name="update_product">
          <input type="submit" name="view_products" value="View Products">
        </div>
      </form>
      <?php };?>
      
    </div>
  </div>
  

</body>
</html>