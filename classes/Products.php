<?php

class Product
{
    public $name;
    public $price;
    public Category $category;


    public function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category  = $category;
    }

    public function getInfo(): string
    {
        return "nome: $this ->  name <br> prezzo: €$this -> price <br> categoria: {$this->category->name}";
    }
}
