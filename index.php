<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/data/db.php';

// var_dump($db);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <link rel="stylesheet" href="css/style.css">
    <title>PHP OOP 2</title>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center">PHP E-commerce</h1>
        <div class="row row-cols-3">
            <?php foreach ($db as $item) : ?>
                <div class="col p-4">
                    <div class="gm_card">
                        <div class="image">
                            <?php echo "<img src='img/" . $item->image . "'>"; ?>
                        </div>
                        <h3>
                            <?php echo $item->name ?>
                        </h3>
                        <div class="description">
                            <p>
                                <?php echo $item->description ?>
                            </p>
                        </div>
                        <div class="price">
                            <p>&euro;<?php echo $item->price ?></p>
                        </div>
                        <div>
                            Categoria:
                            <?php echo $item->category->name ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>