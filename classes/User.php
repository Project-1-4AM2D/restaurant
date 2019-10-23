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
}