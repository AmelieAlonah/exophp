<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?= $baseUri ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $baseUri ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $baseUri ?>/css/styles.css">

  <title>oShop</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
      
        <!-- On génère le lien vers la home avec Alto -->
        <a href="<?=$router->generate('home')?>" class="navbar-brand">oShop</a>

        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">

            <!-- On boucle pour afficher toutes les marques -->
            <?php foreach($brands AS $brand) : ?>
            <li class="nav-item">
              <a href="<?=$router->generate('brand', ['id' => $brand->getId()])?>" class="nav-link"><?= $brand->getName() ?></a>
            </li>
            <?php endforeach; ?>
            <!-- Fin de boucle -->

          </ul>
        </div>

      </div>
    </nav>
  </header>