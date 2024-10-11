<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $type;
    public $img;

    public function __construct($name, $price, $category, $type, $img)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->img = $img;
    }

    public function getInfo()
    {
        return "Nome: {$this->name}, Prezzo: €{$this->price}, Categoria: {$this->category->name}, Tipo: {$this->type}";
    }
}
