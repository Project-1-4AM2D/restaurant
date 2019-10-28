<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aan Tafel - Reserveren</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        .footer {
            margin-top: 0;
        }
    </style>
</head>
<body>
<?php
require('includes/menu.php');
?>

<div class="jumbotron background text-center">
    <h1>Reserveren</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</div>

<section id="reserveren">
    <div class="container">
        <div class="alert alert-info alert-labeled">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
            </button>
            <div class="alert-labeled-row">
                    <span class="alert-label alert-label-left alert-labelled-cell">
                        <i class="fa fa-exclamation"></i>
                    </span>
                <p class="alert-body alert-body-right alert-labelled-cell">
                    U kunt eventueel later een reservering annuleren indien u niet op die tijdstip kan.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h1>Reserveer een tafel</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta dolorem earum enim excepturi expedita impedit inventore maxime, modi quaerat quasi quo tenetur unde. Illo molestias odit quaerat ratione similique?</p>
                <form>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label>Aantal personen:</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label>Datum:</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <label>Tijdstip:</label>
                            <select class="form-control">
                                <option>12:00 Beschikbaar</option>
                                <option>12:15 Beschikbaar</option>
                                <option>12:30 Beschikbaar</option>
                                <option>12:45 Beschikbaar</option>
                                <option>13:15 Beschikbaar</option>
                                <option>13:30 Beschikbaar</option>
                                <option>13:45 Beschikbaar</option>
                                <option>14:00 Beschikbaar</option>
                                <option>14:00 Beschikbaar</option>
                                <option>14:30 Beschikbaar</option>
                                <option>14:45 Beschikbaar</option>
                                <option>15:00 Beschikbaar</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label>Voornaam:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <label>Achternaam:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <label>E-mailadres:</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Reserveren</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4 boeken"></div>
        </div>
    </div>
</section>

<section id="eetgerechten">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h4>Ontbijt 09:30 - 12:00</h4>
                    <span>Elke dag</span>
                </div>
                <div class="col-4">
                    <h4>Lunch 12:00 - 14:00</h4>
                    <span>Elke dag</span>
                </div>
                <div class="col-4">
                    <h4>Diner 17:30 - 24:00</h4>
                    <span>Elke dag</span>
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