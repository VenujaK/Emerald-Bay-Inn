<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emerald Bay Hotel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/Style.css">
    <link rel="stylesheet" href="./CSS/Gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <?php @include("./Components/Header.php") ?>
    <!-- Nav bar ends -->
    <!-- Hero section -->
    <div class="container  hero">
        <img src="./Images/HeroBanner.png" alt="">
    </div>
    <!-- Hero section end -->
    <!-- Carousel -->
    <div class="container-fluid carousell">
        <h1 class="carousel-heading"> Expolre Beautiful Srilanka</h1>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card " style="width: 18rem;">
                    <img src="./Images/carousel 1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="crdhead">Villas</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" onclick="booking()" class="btn btn-outline-warning">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://nimvo.com/wp-content/uploads/2017/08/Purple-Bedroom-750x531.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="crdhead">Duluxe</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" onclick="booking()" class="btn btn-outline-warning">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/736x/c6/6f/b7/c66fb7b279a660e3daf84e7d32efdf07--luxury-rooms-luxury-living.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="crdhead">Luxury</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" onclick="booking()" class="btn btn-outline-warning">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://content.r9cdn.net/himg/70/de/74/ice-98111-photo.aspx_did=2692_brochureid=98111_publicid=37388724_instanceid=10-image.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="crdhead">Normal</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <?php @include("./Components/Footer.php") ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function booking() {
        window.location.replace("Client_Room_View.php");
    }
</script>

</html>