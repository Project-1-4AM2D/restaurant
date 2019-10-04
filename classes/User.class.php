<?php

class User
{
    /**
     * @access public
     * @param array $credentials
     */

    public static function validateUser(Array $credentials)
    {
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        if (preg_match('/^[a-zA-Z ]*$/',$credentials['volledigenaam'])) {
            if (filter_var($credentials['email'], FILTER_VALIDATE_EMAIL) && Data::emailExist($credentials['email'])) {
                if (is_int($credentials['telefoonnummer'])) {
                    if (!strcmp($credentials['wachtwoord'], $credentials['wachtwoord_bevestiging'])) {
                        self::createUser($credentials['volledigenaam'], $credentials['telefoonnummer'], $credentials['email'], $credentials['wachtwoord']);
                    } else {
                        $msg->error('Uw wachtwoord komt niet overeen met het ingevoerde bevestigings wachtwoord');
                    }
                } else {
                    $msg->error('Uw telefoonnummer bestaat uit verkeerde ');
                }
            } else {
                $msg->error('Uw e-mailadres is al geregistreerd');
            }
        } else {
            $msg->error('Uw volledige naam bevat rare tekens, probeer het nogmaals!');


        }
    }

    /**
     * @access public
     * @param String $fullname
     * @param Int $mobile
     * @param String $email
     * @param String $password
     */

    public static function createUser(String $fullname, Int $mobile, String $email, String $password)
    {
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        if (!empty($fullname) && !empty($mobile) && !empty($email) && !empty($password)) {
            $stmt = Database::openVerbinding()->prepare('INSERT INTO users (email, password, name, mobile) VALUES (:email, :password, :name, :mobile)');
            $stmt->execute(array(
                ':email' => $email,
                ':password' => password_hash($password, PASSWORD_BCRYPT),
                ':name' => $fullname,
                ':mobile' => $mobile
            ));
            $msg->success('Succesvol');
        } else {
            $msg->error('Waardes zijn leeg');
        }
    }

}