<?php

require_once 'products/clothes.php';

// nous vérifions sur le param id est présent
if (isset($_GET["id"])) {

    // si oui, on récupère la valeur dans la variable $id
    $id = $_GET['id'];

    // on parcours le tableau à la recherche de l'id, si oui, on stock l'index de l'item dans une variable $index
    foreach ($clothes as $key => $value) {
        if ($value["id"] == $id) {
            $index = $key;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SELIAU by Afpa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

    <h1 class="text-center mt-5">SELIAU by AFPA</h1>

    <nav>
        <ul class="nav justify-content-center my-4">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="accueil.php">Toutes la collection</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="accueil.php?type=t-shirt">T-shirt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="accueil.php?type=chemise">Chemise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="accueil.php?type=sweat-shirt">Sweatshirt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="accueil.php?type=pull">Pull</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="accueil.php?type=pantalon">Pantalon</a>
            </li>
        </ul>
    </nav>

    <main>

        <!-- si $index est présente, on affiche les informations -->
        <?php if (isset($index)) { ?>
            <div class="row mx-0 justify-content-center mb-5">
                <div class="col-8 border rounded shadow">
                    <div class="row">

                        <div class="col-2 pt-2">

                            <?php
                            // on va faire une boucle pour afficher les images de la gallery
                            // nous allons transformer le string en array à l'aide de explode et créer la variable $gallery
                            $gallery = explode(",", $clothes[$index]["gallery"]);

                            // puis nous bouclons celle-ci
                            foreach ($gallery as $image) { ?>

                                <img src="assets/img/<?= $image ?>" class="img-fluid p-2 border m-1" alt="<?= $clothes[$index]["name"] ?>">

                            <?php } ?>

                        </div>

                        <div class="col-5 my-1 row align-items-center">
                            <div class="col">
                                <img src="assets/img/<?= $clothes[$index]["main"] ?>" class="img-fluid" alt="<?= $clothes[$index]["name"] ?>">
                            </div>
                        </div>

                        <div class="col-5 py-2">

                            <p class="text-end mb-5 fw-bold">
                                <?= $clothes[$index]["gender"] ?> / <?= $clothes[$index]["type"] ?>
                                <a class="text-dark" href="accueil.php"><i class="bi bi-x-square-fill ms-2 fs-4"></i></a>
                            </p>
                            <p class="text-center fs-4"><?= $clothes[$index]["name"] ?></p>
                            <p class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit veritatis, modi, sapiente aperiam fugit suscipit nobis ratione odio autem itaque nulla voluptatem iure totam necessitatibus magnam omnis. Explicabo, quibusdam illo?</p>
                            <p class="text-end my-1">Prix : <?= $clothes[$index]["price"] ?> €</p>
                            <p class="text-end my-1">Taille : <?= $clothes[$index]["size"] ?></p>
                            <div class="text-end mb-2">
                                <input type="number" id="qty" name="qty" min="1" max="5" value="1" />
                            </div>
                            <button class="d-block btn btn-dark text-center ms-auto mb-3">Acheter</button>
                        </div>

                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="text-center mt-3">
                <p class="fs-4">Page non trouvée !</p>
                <a class="btn btn-secondary" href="accueil.php">Retour</a>
            </div>
        <?php } ?>


    </main>

    <footer class="bg-dark text-white text-center mt-3 py-4">
        <p class="m-3">Afpa 2K25 - SuperGlobale</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>