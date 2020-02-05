<?php require_once 'layouts/head.php'; ?>

<body>

<!-- header -->
<?php require_once 'layouts/header.php'; ?>

  <!--LES SECTIONS-->
  <main id="sections" class="container-fluid row column">
    <!--SECTION 1-->
    <section id="section1" class="container-fluid col-lg-12 col-md-12 col-sm-12">
      <h2 class="text-light h2centre">Nos ventes</h2>
      <div class="row modifs1">
        <div class="articles1 col-lg-4 col-md-4 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/ventebieres.jpg" alt="">
            <div class="overlay m-auto">
              <h2>Ventes de bières</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
        <div class="articles1 col-lg-4 col-md-4 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/c700x420.jpg" alt="">
            <div class="overlay m-auto">
              <h2>Ventes de verres</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--SECTION 2-->
    <section id="section2 container-fluid col-lg-9 col-md-9 col-sm-9">
      <h2 class="text-light h2centre">Nos news</h2>
      <div class="container-fluid row justify-content-around">
        <div class="articles2 col-lg-3 col-md-3 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/brew-1031484_1920.jpg" alt="">
            <div class="overlay">
              <h2>Artciel 1</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
        <div class="articles2 col-lg-3 col-md-3 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/beer-2166004_1920.jpg" alt="">
            <div class="overlay">
              <h2>Article 2</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
        <div class="articles2 col-lg-3 col-md-3 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/beer-3445988_1920.jpg" alt="">
            <div class="overlay">
              <h2>Article 3</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="section3" class="container-fluid col-lg-12 col-md-12 col-sm-12">
      <h2 class="text-light h2centre">Les fonctionnalitées du site</h2>
      <div class="row modifs1">
        <div class="articles1 col-lg-4 col-md-4 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/ventebieres.jpg" alt="">
            <div class="overlay">
              <h2>Fonction 1</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
        <div class="articles1 col-lg-4 col-md-4 col-sm-4">
          <div class="hovereffect mx-auto col-md-12 col-sm-12">
            <img class="img-responsive" src="public/img/c700x420.jpg" alt="">
            <div class="overlay m-auto">
              <h2>Fonction 2</h2>
              <p>
                <a href="#">Plus d'infos..</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promo" class="my-5">
      <h2>Promotion</h2>
      <p>30% de promotion avec le code "SAINTEBIERE"</p>
      <a href="">Go !</a>
    </section>
    <section id="sectionlogo" class="container-fluid col-lg-6 col-md-6 col-sm-6 mx-auto">
      <div class="container-fluid col-lg-12 col-md-12 col-sm-12 py-5">
        <img class="bg-light mx-4 col-lg-2 col-md-4 col-sm-3" src="public/img/log1.jpg" alt="">
        <img class="bg-light mx-4 col-lg-2 col-md-4 col-sm-3" src="public/img/log2.jpg" alt="">
        <img class="bg-light mx-4 col-lg-2 col-md-4 col-sm-3" class="bg-light" src="public/img/log3.jpg" alt="">
        <img class="bg-light mx-4 col-lg-2 col-md-4 col-sm-3" src="public/img/log4.png" alt="">
      </div>
    </section>
  </main>
  </div>

<!-- footer -->
<?php require_once 'layouts/footer.php' ?>

</body>

<?php require_once 'layouts/scriptJS.php'; ?> 

</html>