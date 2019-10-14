<?php

class DatabaseTest
{
    private static $servernaam = "mysql:host=localhost;dbname=restaurant";
    private static $gebruiker = "root";
    private static $wachtwoord = "2hg9tg9u";

    private static $verbinding;

    private static $opties  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    public static function openVerbinding()
    {
        try {
            self::$verbinding = new PDO(self::$servernaam, self::$gebruiker, self::$wachtwoord, self::$opties);
            return self::$verbinding;
        } catch (PDOException $e) {
            echo "Er is een probleem met de mysql verbinding: " . $e->getMessage();
        }
    }


    public static function sluitVerbinding()
    {
        self::$verbinding = null;
    }
}
