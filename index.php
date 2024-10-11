<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Negozio per animali online</title>
</head>

<body>
    <h1>I nostri prodotti per animali</h1>
    <?php
    require_once __DIR__ .  '/db/db.php';
    foreach ($products as $product) { ?>
        <div class="product-card">
            <h3><?= $product->name ?></h3>
            <p><?= $product->getInfo() ?></p>
            <img src="<?= $product->img ?>" alt="">
        </div>
    <?php } ?>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>