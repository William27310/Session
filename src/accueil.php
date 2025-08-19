<?php

require_once 'products/clothes.php';

// création d'un tableau contenant tous les types de dispo
$allTypes = [
    'pantalon',
    'chemise',
    't-shirt',
    'sweat-shirt',
    'pull'
];

// on mélange à l'aide de la fonction shuffle()
shuffle($clothes);

// on recupère la valeur du get à l'aide de la super globale $_GET
// on vérifie sa présence à l'aide de isset()
if (isset($_GET["type"])) {

    $type = $_GET["type"];

    // nous controllons si le type est présent dans notre tableau 
    if (!in_array($type, $allTypes)) {
        // on crée une variable $noFound pour indiquer qu'il n'y a aucun type.
        $noFound = true;
    }
} else {
    $type = "all";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SELIAU by Afpa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
        <!-- Si la variable $noFound est présente, on affiche un message d'avertissement -->
        <?php if (isset($noFound)) { ?>

            <p class="text-center fs-4">La catégorie <b><?= $type ?></b> n'existe pas</p>

        <?php } else { ?>

            <div class="row m-0 justify-content-evenly">

                <?php foreach ($clothes as $item) {
                    // Nous effectuons une condition : si l'item est différent du type et aussi différent de la valeur all, alors on skip à l'aide de continue;
                    if ($item['type'] != $type && $type != "all") {
                        continue;
                    }
                ?>

                    <div class="div border-dark rounded col-3 p-3 m-3 shadow bg-white">
                        <a href="details.php?id=<?= $item["id"] ?>"><img class="img-fluid" src="assets/img/<?= $item["main"] ?>" alt="<?= $item["name"] ?>"></a>
                    </div>

                <?php } ?>

            </div>

        <?php } ?>

    </main>

    <footer class="bg-dark text-white text-center mt-3 py-4">
        <p class="m-3">Afpa 2K25 - SuperGlobale</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>