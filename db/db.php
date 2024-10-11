<?php
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Products.php';
require_once __DIR__ . '/../classes/Food.php';


$dogCategory = new Category("Cani");
$catCategory = new Category("Gatti");


$products = [
    new Food("Cibo per Cani", 29.99, $dogCategory, "2025-01-01"),
    new Food("Cibo per Gatti", 25.99, $catCategory, "2024-12-31"),
    new Product("Cuccia per cane", 45.99, $dogCategory, "Cuccia", "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg"),
];
