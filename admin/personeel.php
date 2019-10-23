<?php
require_once '../autoload.php';
if (!Login::checkSession()) {
    header('Location: index.php');
    exit();
}
$personeel = new Personeel();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aan Tafel - Personeel</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/button.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php
require('includes/menu.php');
?>
<div style="margin-top: 15px;" class="container-fluid">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Emailadres</th>
            <th scope="col">Volledige naam</th>
            <th scope="col">Aangenomen</th>
            <th scope="col">Actie</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($personeel->getAll() as $arbeider) {
            echo '<tr>
                    <th>' . $arbeider['email'] . '</th>
                    <td>' . $personeel->getPersonal($arbeider['id'])['volledige_naam'] . '</td>
                    <td>' . $arbeider['datum'] . '</td>
                    <td><button type="button" class="btn btn-danger">Verwijderen</button><a href="bewerk_personeel.php?id='. $arbeider['id'] .'" class="btn btn-success">Bekijken</a></td>
                </tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<?php
require('../includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>
