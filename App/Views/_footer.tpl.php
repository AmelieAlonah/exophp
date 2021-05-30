<footer class="main-footer">

  <div id="footer-menu" class="py-5">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">

          <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">oShop</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary">
                <i class="fa fa-twitter">
                </i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary">
                <i class="fa fa-facebook-official">
                </i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                <i class="fa fa-instagram">
                </i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary">
                <i class="fa fa-pinterest">
                </i>
              </a>
            </li>

            <li class="list-inline-item">
              <a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary">
                <i class="fa fa-vimeo">
                </i>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-lg-6">
          <h6 class="text-uppercase text-dark mb-3">Liste des Marques</h6>
          
          <ul class="list-unstyled">
              <?php foreach($brands AS $brand) : ?>
              <li><a href="<?=$router->generate('brand', ['id' => $brand->getId()])?>" class="text-muted"><?= $brand->getName() ?></a></li>
          <?php endforeach; ?>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- Copyright section of the footer-->
  <div id="footer-copyright" class="py-3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-left">
          <p class="mb-md-0">© 2018 oShop. Tous droits réservés.</p>
        </div>
      </div>
    </div>
  </div>
</footer>


  <script src="<?= $baseUri ?>/js/jquery.min.js"></script>
  <script src="<?= $baseUri ?>/js/popper.min.js"></script>
  <script src="<?= $baseUri ?>/js/bootstrap.min.js"></script>
  <script src="<?= $baseUri ?>/js/app.js"></script>
</body>

</html>