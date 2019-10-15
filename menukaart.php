<?php
require_once 'autoloader.php';
?>
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
<section class="menukaart">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs menu_tab" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab" aria-selected="false">Ontbijt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab" aria-selected="false">Lunch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="dinner-tab" data-toggle="tab" href="#dinner" role="tab" aria-selected="false">Diner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dranken-tab" data-toggle="tab" href="#dranken" role="tab" aria-selected="false">Dranken</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content col-xl-12" id="myTabContent">
                <div class="tab-pane fade active show" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Croissant met beleg  <span>&euro;3,00</span></h4>
                                    <p>Heerlijke luxe croissantjes met keuze uit verschillend beleg zoals ambachtelijke jam, oud of jonge kaas, ham etc.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-6.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-1.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-1.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="dranken" role="tabpanel" aria-labelledby="dranken-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-1.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-1.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                                <div class="menu_content">
                                    <h4>Chicken Fried Salad  <span>$45</span></h4>
                                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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