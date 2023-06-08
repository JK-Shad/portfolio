
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
          aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="img-fluid myimg" src="../sources/images/design1.jpg" alt="" srcset="">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Nos Réalisations</h1>
              <p><a class="btn btn-lg btn-primary" href="#project">Réalisations</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <img class="img-fluid myimg" src="../sources/images/02.jpg" alt="" srcset="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Nos Prix</h1>
              <p>Vous voulez un projet, Voici nos prix</p>
              <p><a class="btn btn-lg btn-primary" href="#price">Nos Prix</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid myimg" src="../sources/images/03.jpg" alt="" srcset="">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Contact</h1>
              <p>Prenez contact avec nous.</p>
              <p><a class="btn btn-lg btn-primary" href="contact.php">Contactez nous</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<!--Réalisations-->
<section id="project">
  <h2 class="text-center text-white">Mes Réalisations</h2>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card" >
          <img src="../sources/images/haircut.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Haircut</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="../pages/commons/projets/barber/index.html" class="btn btn-primary btn-sm">Cliquez ici</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" >
          <img src="../sources/images/multishops.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Multishops</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="../pages/commons/projets/Multishops/index.html" class="btn btn-primary btn-sm">Cliquez ici</a>
          </div>
        </div>
        
      </div>
      <div class="col-md-4">
        <div class="card" >
          <img src="../sources/images/cripblock.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cripblock</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="../pages/commons/projets/Cripblock/index.html" class="btn btn-primary btn-sm">Cliquez ici</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!--Prix-->
<section id="price">
  <div class="container">
    <div class="row">
      <h2 class="rea text-center text-white mt-5">Prix</h2>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Gratuit</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">0€<small class="text-muted fw-light">/mois</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 Utilisateurs inclus</li>
                <li>2 Go de Stockage</li>
                <li>Assistance par e-mail</li>
                <li>Accès au centre d'aide</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-dark">Inscription gratuite</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">15€<small class="text-muted fw-light">/mois</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 Utilisateurs inclus</li>
                <li>10 Go de Stockage</li>
                <li>Assistance par e-mail prioritaire</li>
                <li>Accès au centre d'aide</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-dark">Commander dès maintenant!</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-dark">
            <div class="card-header py-3 text-bg-primary border-dark">
              <h4 class="my-0 fw-normal">Enterprise</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">29€<small class="text-muted fw-light">/mois</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>30 Utilisateurs inclus</li>
                <li>15 Go de Stockage</li>
                <li>Assistance par téléphone et par e-mail</li>
                <li>Accès au centre d'aide</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-dark">Contactez nous</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    $content= ob_get_clean();
    require "commons/template.php";
?>