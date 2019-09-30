<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aan Tafel - Homepagina</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <?php
    require('includes/menu.php');
    ?>

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" loop="loop" id="headerVideo">
            <source src="images/video.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                <img src="./images/logo2.png" width="" height=230 alt="logo" onclick="pauseVideo()" id="pause">
                </div>
            </div>
        </div>
    </header>


    <section id="openingstijden" class="my-5">
        <div class="container">
            <h1 class="text-center display-4">Openingstijden</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/open.jpg" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <div class="lead">
                        <p>Maandag t/m vrijdag vanaf 09:00-24:00</p>
                        <p>Zaterdag en zondag vanaf 10:00-24:00</p>
                        <p>Ontbijt wordt geserveerd vanaf 09:00 tot 12:00</p>
                        <p>Lunch wordt geserveerd vanaf 12:00 tot 14:00</p>
                        <p>Diner wordt geserveerd vanaf 17:30 tot 24:00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    require('includes/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/video.js"></script>
</body>
</html>