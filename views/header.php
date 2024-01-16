<?php

    $pageCourant = $_SERVER['REQUEST_URI'];

    $metaTitle = "Site CV";

    $metaDescription = "CV DevOps";

    if($pageCourant == "/" || $pageCourant == "/index.php"){
        $metaTitle = "CV Gérémy";
        $metaDescription = "CV DevOps Gérémy Alternant";
    }else if($pageCourant == "/hobbie.php"){
        $metaTitle = "Mes hobbies";
        $metaDescription = "CV DevOps Gérémy Alternant hobbie loisir";

    }else if($pageCourant == "/contact.php"){
        $metaTitle = "Contactez-moi !";
        $metaDescription = "CV DevOps Gérémy Alternant contact prestation";

    }

?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="<?= $metaDescription ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $metaTitle ?></title>
  <link rel="stylesheet" href="../assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="div-nav-bar container-fluid">
      <a class="navbar-brand" href="./index.html"><img src="../assets/logo/Rectangle 34.png" alt="logo_entreprise"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../hobbie.php">Hobby</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>