<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
<?php @include("./Components/Header.php") ?>
    <!-- Gallery -->
    <div class="row gallery" style="padding: 15px;">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="https://images.unsplash.com/photo-1615460549969-36fa19521a4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzl8fGhvdGVsfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWxzfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://media.istockphoto.com/id/104731717/photo/luxury-resort.jpg?s=612x612&w=0&k=20&c=cODMSPbYyrn1FHake1xYz9M8r15iOfGz9Aosy9Db7mI=" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

            <img src="https://mma.prnasia.com/media2/1430139/tin_lung_heen.jpg?p=medium600" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0" style="overflow:hidden;">
            <img src="https://assets.cntraveller.in/photos/631217d33c602c95d2bace79/1:1/w_1171,h_1171,c_limit/MO%20Tokyo%203.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

            <img src="https://i.pinimg.com/originals/a4/3c/04/a43c04f4ec67aacaeb6c886b89e7af1a.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0" style="position: relative; bottom:420px;">
            <img src="https://www.swissotel.com/assets/0/92/3686/3768/3770/6442451433/ae87da19-9f23-450a-8927-6f4c700aa104.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

            <img src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0" style="position: relative; bottom:430px;">
            <img src="https://www.riu.com/images/hotels/7101.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

            <img src="http://island.lk/wp-content/uploads/2022/04/Granbell-Hotel.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>
    </div>
    <!-- Gallery -->
    <!-- Footer -->
    <?php @include("./Components/Footer.php") ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>