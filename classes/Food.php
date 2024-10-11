<?php

class Food extends Product
{
    public $expireDate;

    public function __construct($name, $price, Category $category, $expireDate)
    {
        parent::__construct($name, $price, $category, 'Cibo', 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg');
        $this->expireDate = $expireDate;
    }
    public function getInfo(): string
    {
        return parent::getInfo() . " Scadenza: $this->expireDate";
    }
}
