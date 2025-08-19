<?php

require_once 'products/clothes.php';

var_dump($clothes);
var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CELIO by Afpa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1 class="text-center">CELIO by AFPA</h1>

    <ul class="nav justify-content-center mt-4">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="accueil.php">Toutes la collection</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="accueil.php?cat=t-shirt">T-shirt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="accueil.php?cat=chemise">Chemise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="accueil.php?cat=sweatshirt">Sweatshirt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="accueil.php?cat=pull">Pull</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="accueil.php?cat=pantalon">Pantalon</a>
        </li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>