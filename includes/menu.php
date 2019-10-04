<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['registreren'])) {
        User::validateUser($_POST);
    } else if (isset($_POST['aanmelden'])) {

    }
}
?>
<nav class="nav boven">
    <div class="container">
        <div class="top-bar-left">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
        </div>
        <div class="top-bar-right">
            <a data-toggle="modal" data-target="#aanmelden"><i class="fa fa-user"></i> Aanmelden</a>
            <a data-toggle="modal" data-target="#registreren"><i class="fa fa-sign-in-alt"></i> Registreren</a>
            <a data-toggle="modal" data-target="#soliciteren"><i class="fas fa-blender-phone"></i></i> Soliciteren</a>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-sm">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Homepagina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#openingstijden">Openingstijden</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link" href="#">Menukaart <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="index.php#menukaart">Ontbijt</a>
                            <div class="breker"></div>
                            <a class="dropdown-item" href="index.php#menukaart">Lunch</a>
                            <div class="breker"></div>
                            <a class="dropdown-item" href="index.php#menukaart">Diner</a>
                            <div class="breker"></div>
                            <a class="dropdown-item" href="index.php#menukaart">Dranken</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reserveren.php">Reserveren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Online bestellen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Contact</a>
                </li>
             </ul>
        </div>
    </div>
</nav>

<!--Aanmelden modal-->
<div class="modal fade" id="aanmelden" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aanmelden</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>E-mailadres:</label>
                        <input type="email" class="form-control" placeholder="Voer hier uw e-mailadres in">
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord:</label>
                        <input type="password" class="form-control" placeholder="Voer hier uw wachtwoord in">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                <button type="button" class="btn btn-primary">Inloggen</button>
            </div>
        </div>
    </div>
</div>

<!--Registeren modal-->
<div class="modal fade" id="registreren" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registreren</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Volledige naam</label>
                        <input type="text" name="volledigenaam" class="form-control" placeholder="Voer hier uw voornaam en achternaam in" required>
                    </div>
                    <div class="form-group">
                        <label>Telefoonnummer</label>
                        <input type="number" name="telefoonnummer" class="form-control" placeholder="Voer hier uw telefoonnummer in" required>
                    </div>
                    <div class="form-group">
                        <label>E-mailadres:</label>
                        <input type="email" name="email" class="form-control" placeholder="Voer hier uw e-mailadres in" required>
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord:</label>
                        <input type="password" name="wachtwoord" class="form-control" placeholder="Voer hier uw wachtwoord in" required>
                    </div>
                    <div class="form-group">
                        <label>Bevestig Wachtwoord:</label>
                        <input type="password" name="wachtwoord_bevestiging" class="form-control" placeholder="Voer hier nogmaals uw wachtwoord in" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                    <button type="submit" name="registreren" class="btn btn-primary">Registreren</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Soliciteren modal-->
<div class="modal fade" id="soliciteren" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vacaturen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Volledige naam</label>
                        <input type="text" class="form-control" placeholder="Voer hier uw voornaam en achternaam in" required>
                    </div>
                    <div class="form-group">
                        <label>Telefoonnummer</label>
                        <input type="number" class="form-control" placeholder="Voer hier uw telefoonnummer in" required>
                    </div>
                    <div class="form-group">
                        <label>E-mailadres:</label>
                        <input type="email" class="form-control" placeholder="Voer hier uw e-mailadres in" required>
                    </div>
                    <div class="form-group">
                        <label>Openstaande functies</label>
                        <select class="form-control">
                            <option>Functie 1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>CV</label>
                        <input type="file" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>Motivatie</label>
                       <textarea class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                <button type="button" class="btn btn-primary">Inzenden</button>
            </div>
        </div>
    </div>
</div>
<?php
//if (isset($msg)) {
//    echo '<div class="modal fade" id="errorbericht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
//    <div class="modal-dialog" role="document">
//        <div class="modal-content">
//            <h3>'. $msg->display(null, false) .'</h3>
//        </div>
//    </div>
//</div>';
//}
//?>