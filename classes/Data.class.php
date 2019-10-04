<?php


class Data
{
    public static function emailExist($email)
    {
        $stmt = Database::openVerbinding()->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
        $stmt->execute(array(
            ':email' => $email
        ));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($row['COUNT(*)'] == 0);
    }
}