<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';

$catsCategory = new Category('gatti');
$prodotto1 = new Product(1, 'cibo per gatti', 'ciboPerGatti1_.jpg', 'Ogni ricetta, preparata con ingredienti di qualità, è una combinazione di due deliziosi gusti, in teneri bocconcini in gelatina. Il tuo gatto potrà assaporare le sue due ricette preferite in un unico, ghiottissimo pasto', 5.00, $catsCategory);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <title>PHP OOP 2</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center">PHP E-commerce</h1>

    </div>
</body>

</html>