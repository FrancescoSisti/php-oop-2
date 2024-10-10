<?php

class Food extends Product
{
    public $expireDate;

    public function __construct($name, $price, Category $category, $expireDate)
    {
        parent::__construct($name, $price, $category, 'Cibo');
        $this->expireDate = $expireDate;
    }
    public function getInfo(): string
    {
        return parent::getInfo() . "$this -> expireDate";
    }
}
