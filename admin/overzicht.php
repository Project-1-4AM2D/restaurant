<?php
require_once '../autoload.php';
if (!Login::checkSession()) {
    header('Location: index.php');
    exit();
}

echo 'Ingelogd!' . $_SESSION['id'];