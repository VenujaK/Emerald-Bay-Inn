<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="./CSS/Services.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <?php @include("./Components/Header.php") ?>
    <div class="row row-cols-1 row-cols-md-3 g-4 px-3 mt-2">
        <div class="col ">
            <div class="card">
                <img src="https://www.bestoflanka.com/images/best-things-to-do-in-sri-lanka/adventure-sri-lanka/adventure-kitulgala-sri-lanka/kitulgala-confidence-jump/09.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Day Out</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Register</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://www.zonebowling.com/media/4976/zb-teens-banner-parties.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Birth Days</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Register</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://www.ceylinetravels.lk/wp-content/uploads/2019/10/Services-Destination-Weddings.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Weddings</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <button type="button" onclick="booking()" align="center" class="btn btn-outline-warning ">Register</button>
                </div>
            </div>
        </div>
    </div>


    <?php @include("./Components/Footer.php") ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>