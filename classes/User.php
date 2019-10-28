<?php

class User
{
    private $fields;

    private $data;

    /**
     * Stopt alle personeels gegevens in $fields
     * @param int $id
     */

    public function __construct(int $id)
    {
        $this->data = new Data();

        foreach ($this->data->getAll($id) as $key => $value) {
            $this->fields[$key] = $value;
        }
    }

    /**
     * Haalt persoons gegevens op
     * @param string $information
     * @return mixed
     */
    public function getField(string $information)
    {
        if (strcmp($information, 'wachtwoord')) {
            return $this->fields[$information];
        }
    }

    /**
     * Haalt persoonlijke gegevens op
     * @param string $information
     * @return mixed
     */
    public function getPersonal(string $information)
    {
        $data = $this->data->getPersonal($this->getField('gegevens_id'));
        return $data[$information];
    }
}