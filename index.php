<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Negozio per animali online</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">I nostri prodotti per animali</h1>
        <div class="row">
            <?php
            require_once __DIR__ .  '/db/db.php';
            foreach ($products as $product) { ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= $product->img ?>" class="card-img-top product-img" alt="<?= $product->name ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->name ?></h5>
                        <p class="card-text"><?= $product->getInfo() ?></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Aggiungi al carrello</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>