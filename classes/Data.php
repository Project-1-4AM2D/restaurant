<?php


class Data
{
    private $db;

    /**
     * Init database
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @return Database
     */
    public function getData()
    {
        return $this->db;
    }

    /**
     * Valideer of het emailadres bestaat
     * @param string $email
     * @return bool
     */
    public function emailExist(string $email): bool
    {
        $this->db->insertUserValues('SELECT COUNT(*) FROM personeel WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->All();
        return ($row > 0);
    }

    /**
     * Haal het wachtwoord op van een specifiek gebruiker
     * @param string $email
     * @return string
     */
    public function getPassword(string $email): string
    {
        $this->db->insertUserValues('SELECT wachtwoord FROM personeel WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->SingleRow();
        return $row['wachtwoord'];
    }

    /**
     * Converteert het emailadres tot een gebruikersid
     * @param string $email
     * @return int
     */
    public function getId(string $email): int
    {
        $this->db->insertUserValues('SELECT id FROM personeel WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->SingleRow();
        return $row['id'];
    }

    /**
     * Haalt alle personeels cred op van een specifiek gebruiker
     * @param int $id
     * @return array
     */
    public function getAll(int $id): array
    {
        $this->db->insertUserValues('SELECT * FROM personeel WHERE id = :id');
        $this->db->bind(':id', $id);

        return $row = $this->db->SingleRow();
    }

    /**
     * @param int $id
     * @return array
     */
    public function getPersonal(int $id): array
    {
        $this->db->insertUserValues('SELECT * FROM personeel_gegevens WHERE id = :id');
        $this->db->bind(':id', $id);

        return $row = $this->db->SingleRow();
    }

    /**
     * Haalt alle personels op
     * @return array
     */
    public function getAllPersonal(): array
    {
        $this->db->insertUserValues('SELECT * FROM personeel');

        return $row = $this->db->All();
    }
}