<?php


class Login
{
    private $email;
    private $password;

    protected $validate;

    /**
     * Doorgevoerde credentials opslaan en ophalen van benodigde data
     * @param string $email
     * @param string $password
     */

    public function __construct(string $email, string $password)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            $this->password = $password;

            $this->validate = new Data();
        }
    }

    /**
     * Checkt of de credentials bestaan om vervolgens een User object te starten
     * @return bool|User
     */
    public function validateUser()
    {
        if ($this->validate->emailExist($this->email)) {
            if (password_verify($this->password, $this->validate->getPassword($this->email))) {
                return new User($this->validate->getId($this->email));
            }
        }

        return false;
    }

    /**
     * Sessie id neerzetten voor validatie en data
     */
    public function startSession()
    {
        if (!isset($_SESSION['id'])) {
            $_SESSION['id'] = $this->validate->getId($this->email);
        }
    }

    /**
     * Sessie id sluiten
     */
    public function closeSession()
    {
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
            session_destroy();
        }
    }

    /**
     * Valideer de sessie id
     * @return bool
     */
    public static function checkSession()
    {
        return isset($_SESSION['id']);
    }
}