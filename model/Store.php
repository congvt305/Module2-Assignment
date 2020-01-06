<?php


class Store
{
    private $id;
    private $name;

    public function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}