<section class="hero">
    <div class="container">


        <div class="hero-content pb-5 text-center">
            <h1 class="hero-heading">Marque 1</h1>
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="products-grid">
    <div class="container-fluid">

        <div class="row">
        
            <!-- ICI ON BOUCLE POUR AFFICHER TOUS LES PRODUCTS DE LA MARQUE CONCERNEE -->
            <!-- ON METS A JOUR LES LIENS POUR POINTER SUR LA PAGE DU PRODUIT -->
            <?php dump($viewVars['productsByBrand']);foreach($viewVars['productsByBrand'] as $product):?>

            <div class="product col-xl-3 col-lg-4 col-sm-6">
                <div class="product-image">
                    <a href="<?= $router->generate('product', ['id' => $product->getId()]) ?>" class="product-hover-overlay-link">
                        <img src="<?= $baseUri ?>/<?= $product->picture ?>" alt="product" class="img-fluid">
                    </a>
                </div>

                <div class="product-action-buttons">
                    <a href="<?= $router->generate('product', ['id' => $product->getId()]) ?>" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
                </div>

                <div class="py-2">
                    <p class="text-muted text-sm mb-1"><?= $product->brand_id; ?></p>
                    <h3 class="h6 text-uppercase mb-1"><?= $product->getName();?></h3><span class="text-muted"><?= $product->price ;?> €</span>
                </div>
            </div>
            <?php endforeach; ?>
  
            <!-- FIN DE BOUCLE -->

        </div>

    </div>
</section>