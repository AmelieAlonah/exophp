<section class="my-5">
  <div class="container-fluid">

    <h1 class="text-center my-5">Tous nos produits</h1>

    <div class="row mx-0">
    
    <!-- ICI ON BOUCLE POUR AFFICHER TOUS LES PRODUITS -->
    <!-- METTRE A JOUR LES LIENS POUR QUE CELA POINTE VERS LE PAGE DU PRODUIT EN QUESTION -->
<?php  foreach($viewVars['products'] as $product) : ?>
  <div class="col-lg-3">
        <div class="card border-0 text-white text-center"><img src="<?= $baseUri ?>/<?= $product->picture ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100 py-3">
              <h2 class="display-3 font-weight-bold mb-4"><?= $product->getName() ?></h2><a href="<?= $router->generate('product', ['id' => $product->getId()]) ; ?>" class="btn btn-light">Découvrir</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ; ?>
    </div>
  </div>
</section>