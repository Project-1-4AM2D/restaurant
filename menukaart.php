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
    <h1>Menukaart</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</div>

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
                    <a class="nav-link " id="nagerechten-tab" data-toggle="tab" href="#nagerechten" role="tab" aria-selected="false">Nagerechten</a>
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
                                <div class="menu_content">
                                    <h4>CROISSANTJES MET BELEG  <span>&euro;5,00</span></h4>
                                    <p> Ambachtelijke jam | Jong belegen kaas | gerookte ham | etc.</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>BROODJE BRIE  <span>&euro;10,50</span></h4>
                                    <p> Walnoten-chrunch | honing</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>BROODJE GEZOND  <span>&euro;10,25</span></h4>
                                    <p> Jong belegen kaas | gerookste achterham | tomaat | gekooktneitje | salade | Thousand Island dressing</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>FILET AMERICAIN  <span>&euro;10,25</span></h4>
                                    <p> Augurk | rode ui | kaassnippers | pijnboompitten</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>GEROOKTE KIPFILET  <span>&euro;10,25</span></h4>
                                    <p> Gebakken spek | sla | tomaat | mayonaise</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>CARPACCIO  <span>&euro;10,25</span></h4>
                                    <p> Dungesneden ossenhaas | kappertjes | pijnboompitjes | Parmazaanse kaas | olijventapenade</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>GEGRILDE KIPSATÉ  <span>&euro;13,50</span></h4>
                                    <p> Kippendijen | zoetzure komkommer | gebakken uitjes | seroendeng | kroepoek | licht pikante pindasaus | kousenband salade | friet</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>GEROOKTE ZALM  <span>&euro;9,50</span></h4>
                                    <p>Biologische sub sandwich | limoen crème fraiche | zoetzure komkommer | rode ui | dillemayonaise</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>OMELET PICCANTE   <span>&euro;9,50</span></h4>
                                    <p>Groene asperges | spinazie | paprika | chorizo | getoast wit landbrood</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>"Amsterdamse" BURGER  <span>&euro;14,50</span></h4>
                                    <p>Truffelburger | meergranen bun | little gem | zoete uien compôte | bacon | “Utregse” Oude Gracht kaas | twister friet | geroosterde paprikasaus</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>GEITENKAASSALADE   <span>&euro;11,95</span></h4>
                                    <p>Baby spinazie | pecannoten | avocado crème | gekarameliseerde appel | granola | cranberries | honing</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>UITSMIJTERS   <span>&euro;9,75</span></h4>
                                    <p>
                                    Gebakken beenham | honing-mosterdmayonaise<br>
                                    Carpaccio | gelakt met truffelglace | rucola | mini tomaatjes | walnoten | Parmezaanse kaas | rode ui | truffelmayonaise
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>BLACK ANGUS TOURNEDOS   <span>&euro;26,50</span></h4>
                                    <p> Gebakken paddenstoelen | bataatcrème | truffeljus | krokante cassave</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>GEGRILDE KIPSATÉ  <span>&euro;20,50</span></h4>
                                    <p> Kippendijen | zoetzure komkommer | gebakken uitjes | seroendeng | kroepoek | licht pikante pindasaus | kousenband salade</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>MIXED GRILL  <span>&euro;22,50</span></h4>
                                    <p> Kipsteak | lamspies | Iberico nek | sukade steak | gegrilde maiskolf | pepersaus | chimichurri</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>SCHNITZEL  <span>&euro;18,50</span></h4>
                                    <p> Pata negra ham | tartaarsaus | limoen | gepofte tomaten</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>KABELJAUW  <span>&euro;22,50</span></h4>
                                    <p> Whiskey-soja saus | fregola | pompoen gemarineerd in sinaasappel | komkommerschuim</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>100% VEGAN BURGER  <span>&euro;18,50</span></h4>
                                    <p> Plantaardig “vlees” | zuurdesem bun | cheddar kaas | little gem | tomaten salsa | avocado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nagerechten" role="tabpanel" aria-labelledby="nagerechten-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>SORBET  <span>&euro;7,50</span></h4>
                                    <p> Lychee | passievrucht | aardbei | ijshoorn | slagroom | vruchtencoulis</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>WITTEVROUWEN  <span>&euro;8,50</span></h4>
                                    <p> Chocolade-sinaasappel ganache | cacao spongecake | gezouten karamel | Oreo crumble | vanille-ijs</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>CRÈME BRÛLÉE  <span>&euro;8,50</span></h4>
                                    <p> Arabica koffie | Haagse hopjes ijs | Café mokka tuille | Oreo crumble</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>NEW YORK-STYLE CHEESECAKE  <span>&euro;8,50</span></h4>
                                    <p> Mousse van framboos | cookie dough roomijs | mango gel | framboos kletskop</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>CHOCOLADE PANNA COTTA  <span>&euro;8,50</span></h4>
                                    <p> Blondie cake | witte chocolade crème | yoghurtschots | ijs van Ruby cacao | rood fruit gel</p>
                                </div>
                            </div>
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>KAASPLANKJE  <span>&euro;12,50</span></h4>
                                    <p> 5 verschillende kazen: Rondin | Castilinhos | Utrechtse cigno | Beemster XO | Gorgonzola piccante | balsamico-noten crunch | gemberbrood</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="dranken" role="tabpanel" aria-labelledby="dranken-tab">
                    <div class="row">
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>VERSE JUS D'ORANGE  <span>&euro;3,95</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>APPELSAP  <span>&euro;2,95</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>DRUIVENSAP  <span>&euro;2,90</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>FRISTI/CHOCOLADEMELK  <span>&euro;2,75</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>DIVERSE FRISDRANKEN  <span>&euro;2,80</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>LATTE MACCHIATO  <span>&euro;3,90</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>CAPPUCCINO  <span>&euro;2,90</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>ESPRESSO  <span>&euro;2,85</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>VERSE MUNTTHEE  <span>&euro;3,85</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single_menu_list">
                                <div class="menu_content">
                                    <h4>THEE  <span>&euro;2,75</span></h4>
                                </div>
                            </div>
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