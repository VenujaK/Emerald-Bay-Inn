<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomadations</title>
    <link rel="stylesheet" href="./CSS/Accomodation.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
<?php @include("./Components/Header.php") ?>
    <div class="card mb-3">
        <img src="https://nimvo.com/wp-content/uploads/2017/08/Purple-Bedroom-750x531.jpg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title">Duluxe Rooms</h5>
            <p class="card-text">the Deluxe Rooms are adorned with soft, soothing earthy tones, offering stress-free relaxation. During your stay, enjoy all the luxuries of a spacious, white marble bathroom, wonderfully soft bedding, cityscape views that surpass those of any other 5 star hotels in Colombo</p>
            <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Book Now</button>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card mb-3">
        <img src="https://i.pinimg.com/736x/c6/6f/b7/c66fb7b279a660e3daf84e7d32efdf07--luxury-rooms-luxury-living.jpg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title">Luxury Rooms</h5>
            <p class="card-text">Designed to be a class above luxury rooms in Colombo, the 20 Luxury Rooms at Jetwing Lighthouse Spa Wing embody an opulent charm befitting of their enchanting location by the Indian Ocean. With lavish furnishings that blend a vibrant coastal chic with the heritage luxury of bygone architecture, each luxury Room is an elegant coastal respite dominated by a plush four-poster king-sized bed with its own pillow menu. </p>
            <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Book Now</button>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card mb-3">
        <img src="https://content.r9cdn.net/himg/70/de/74/ice-98111-photo.aspx_did=2692_brochureid=98111_publicid=37388724_instanceid=10-image.jpg" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title">Normal Rooms</h5>
            <p class="card-text">It's as close as you can get to the city without feeling overwhelmed by the chaos of it all. Bordering prestigious Colombo 07, Emerald Bay offers easy access to all the city's top attractions.</p>
            <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Book Now</button>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card mb-3">
        <img src="./Images/carousel 1.png" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title">Villas</h5>
            <p class="card-text">With an expansive outdoor space for lounging, dining, and entertaining, this exclusive resort boasts breathtaking views on all sides, whether over the endless sea with the wild Dalmatian islands in the distance, or toward the verdant surroundings with olive trees and granite formations. The layout of the gorgeous garden villas reflect an unparalleled contemporary architectural design.</p>
            <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Book Now</button>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <?php @include("./Components/Footer.php") ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    function booking(){
        window.location.replace("Client_Room_View.php");
    }
</script>

</html>