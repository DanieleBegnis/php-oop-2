<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed 
il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Dog.php';
require_once __DIR__ . '/Models/Cat.php';

$ciotola = new Category('Pippolo', 'Ciotola', 'Lorem ipsum');
$osso = new Category('Ossolo', 'osso', 'Lorem ipsum');
$guinzaglio = new Category('Guinzagliolo', 'guinzaglio', 'Lorem ipsum');
$palla = new Category('Pallolo', 'palla', 'Lorem ipsum');
$croccantini = new Category('Croccantinolo', 'croccantini', 'Lorem ipsum');

$products = [
    $ciotola,
    $osso,
    $guinzaglio,
    $palla,
    $croccantini
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>WebStore</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <p class="card-text"><?php echo $product->description; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>