<?php
function mijn_autoload($class)
{
    if (preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . '.class.php';
    }
}

spl_autoload_register('mijn_autoload');

// require('classes/FlashMessages.class.php');

if (session_status() == PHP_SESSION_NONE) {
    // $msg = new \Plasticbrain\FlashMessages\FlashMessages();
    session_start();
}