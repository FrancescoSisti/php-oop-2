<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $type;

    public function __construct($name, $price, $category, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }

    public function getInfo()
    {
        return "Nome: {$this->name}, Prezzo: €{$this->price}, Categoria: {$this->category->name}, Tipo: {$this->type}";
    }
}
