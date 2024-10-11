<?php

require_once __DIR__ . '/../app/Traits/LoggableTrait.php';
require_once __DIR__ . '/../app/Exceptions/InvalidDataException.php';

use App\Traits\LoggableTrait;
use App\Exceptions\InvalidDataException;

class Product
{
    use LoggableTrait;

    public $name;
    public $price;
    public $category;
    public $type;
    public $img;

    public function __construct($name, $price, $category, $type, $img)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->category = $category;
        $this->type = $type;
        $this->img = $img;
    }

    public function setName($name)
    {
        if (empty($name)) {
            throw new InvalidDataException("Il nome del prodotto non può essere vuoto");
        }
        $this->name = $name;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || $price <= 0) {
            throw new InvalidDataException("Il prezzo deve essere un numero positivo");
        }
        $this->price = $price;
    }

    public function getInfo()
    {
        $this->log("Informazioni richieste per il prodotto: {$this->name}");
        return "Nome: {$this->name}, Prezzo: €{$this->price}, Categoria: {$this->category->name}, Tipo: {$this->type}";
    }
}
