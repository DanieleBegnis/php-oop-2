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

//prodotti generici

$ciotola = new Category('Pippolo', 'Ciotola', 'Lorem ipsum', 'https://picsum.photos/seed/picsum/200/300');
$osso = new Category('Ossolo', 'osso', 'Lorem ipsum', 'https://picsum.photos/seed/picsum/200/300');
$guinzaglio = new Category('Guinzagliolo', 'guinzaglio', 'Lorem ipsum', 'https://picsum.photos/seed/picsum/200/300');
$palla = new Category('Pallolo', 'palla', 'Lorem ipsum', 'https://picsum.photos/seed/picsum/200/300');
$croccantini = new Category('Croccantinolo', 'croccantini', 'Lorem ipsum', 'https://picsum.photos/seed/picsum/200/300');


$products = [
    $ciotola,
    $osso,
    $guinzaglio,
    $palla,
    $croccantini
];

//prodotti specifici cane
$frisbee = new Dog('Frisbee', 'Frisbee', 'Lorem ipsum frisbee', 'https://picsum.photos/seed/picsum/200/300', '12.99$', 'Per Cani');

//metto attributo colore
$frisbee->setColor('rosso');

$guinzaglio_dog = new Dog('Guinzaglio', 'guinzaglio', 'Lorem ipsum guinzaglio', 'https://picsum.photos/seed/picsum/200/300', '6.99$', 'Per Cani');
$pappe = new Dog('Pappe', 'cibo', 'Lorem ipsum cibo cibo cibo', 'https://picsum.photos/seed/picsum/200/300', '5.99$', 'Per Cani');
$sacchettini = new Dog('Sacchettini', 'pulizia', 'Lorem ipsum bl bla bla bla bla bla', 'https://picsum.photos/seed/picsum/200/300', '16.99$', 'Per Cani');

$dog_products = [
    $frisbee,
    $guinzaglio_dog,
    $pappe,
    $sacchettini,
];

//prodotti specifici gatto
$pappine = new Dog('pappa ', 'cibo', 'Lorem ipsum papp abagnata che piace tanto', 'https://picsum.photos/seed/picsum/200/300', '6.99$', 'Per Gatti');
$laser = new Dog('Laser', 'giocattolo', 'Lorem ipsum lase laser gioco per gatti', 'https://picsum.photos/seed/picsum/200/300', '3.99$', 'Per Gatti');
$ciotolina = new Dog('Ciotolina', 'cibo', 'Lorem ipsum cibo cibo cibo', 'https://picsum.photos/seed/picsum/200/300', '12.50$', 'Per Gatti');

//metto attributo colore
$ciotolina->setColor('verde');

$sabbietta = new Dog('Sabbietta', 'pulizia', 'Lorem ipsum bl bla bla bla bla bla', 'https://picsum.photos/seed/picsum/200/300', '7.99$', 'Per Gatti');

$cat_products = [
    $pappine,
    $laser,
    $ciotolina,
    $sabbietta,
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
        <h3>Prodotti generici</h3>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <p class="card-text"><?php echo $product->description; ?></p>
                            <a href="#" class="btn btn-primary">Contattaci per sapere il prezzo</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h3>Prodotti cani</h3>
        <div class="row">
            <?php foreach ($dog_products as $product) { ?>
                <div class="col-3">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <p class="card-text"><?php echo $product->description; ?></p>
                            <h4 class="card-text"><?php echo $product->price; ?></h4>
                            <p class="card-text"><?php echo $product->animal; ?></p>
                            <a href="#" class="btn btn-primary">Go buy product</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h3>Prodotti gatti</h3>
        <div class="row">
            <?php foreach ($cat_products as $product) { ?>
                <div class="col-3">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <p class="card-text"><?php echo $product->description; ?></p>
                            <h4 class="card-text"><?php echo $product->price; ?></h4>
                            <p class="card-text"><?php echo $product->animal; ?></p>
                            <a href="#" class="btn btn-primary">Go buy product</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>