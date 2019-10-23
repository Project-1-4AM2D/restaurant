<?php


class Personeel
{
    private $fields;

    private $data;

    /**
     * Init personeels credentials van een specifiek gebruiker
     * @param null $id
     */
    public function __construct($id = null)
    {
        $this->data = new Data();

        if (!is_null($id)) {
            foreach ($this->data->getAll($id) as $key => $value) {
                $this->fields[$key] = $value;
            }
        }
    }

    /**
     * Haalt alle credentials op
     * @return array
     */
    public function getAll(): array
    {
        return $this->data->getAllPersonal();
    }

    /**
     *
     * @param string $information
     * @return array|bool
     */
    public function getField(string $information)
    {
        if (strcmp($information, 'wachtwoord')) {
            if (!strcmp($information, 'gegevens_id')) {
                return $this->data->getPersonal($this->fields[$information]);
            }

            return $this->fields[$information];
        }

        return false;
    }

    /**
     * Haalt alle persoonlijke gegevens op van een gebruiker
     * @param int $id
     * @return array
     */
    public function getPersonal(int $id): array
    {
        return $this->data->getPersonal($id);
    }
}