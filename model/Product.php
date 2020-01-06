<?php


class Product
{
    private $id;
    private $name;
    private $price;
    private $toppings;

    public function __construct($_id, $_name, $_price, $_toppings)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->toppings = $_toppings;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getToppings()
    {
        return $this->toppings;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $toppings
     */
    public function setToppings($toppings)
    {
        $this->toppings = $toppings;
    }
}