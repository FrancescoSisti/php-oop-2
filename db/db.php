<?php
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Products.php';
require_once __DIR__ . '/../classes/Food.php';
require_once __DIR__ . '/../app/Exceptions/InvalidDataException.php';

use App\Exceptions\InvalidDataException;

$dogCategory = new Category("Cani");
$catCategory = new Category("Gatti");
$fishCategory = new Category("Pesci");

$products = [];

try {
    $products = [
        new Food("Cibo per Cani", 29.99, $dogCategory, "2025-01-01"),
        new Food("Cibo per Gatti", 25.99, $catCategory, "2024-12-31"),
        new Product("Cuccia per cane", 45.99, $dogCategory, "Cuccia", "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg"),
        new Product("Giocattolo per gatti", 12.99, $catCategory, "Giocattolo", "https://example.com/cat-toy.jpg"),
        new Product("Acquario", 89.99, $fishCategory, "Habitat", "https://example.com/aquarium.jpg"),
        new Food("Mangime per pesci", 8.99, $fishCategory, "2025-06-30"),
    ];
} catch (InvalidDataException $e) {
    echo "Errore durante la creazione dei prodotti: " . $e->getMessage();
} catch (Exception $e) {
    echo "Si è verificato un errore imprevisto: " . $e->getMessage();
}