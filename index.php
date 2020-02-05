<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bières en stock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="icon" href="public/img/favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
  <div class="container-fluid">
    <!--BAR COOKIE-->
    <div id='cookie-bar'>
      <div class="cookie">
        Ce site web utilise des cookies -
        <a id='cookie-policy' href='#'>
          Consulter notre politique des cookies !</a>
        <div id="bouton" class="ml-2 mr-2">
          <button onclick="hide()" type="button" id="oui" class="btn-outline">Ok</button>
          <button type="button" id="non" class="btn-outline">Non</button>
        </div>
      </div>
    </div>
    <!--HEADER-->
    <header>
      <!--NAVIGATEUR-->
      <nav class="navbar navbar-expand-md navigateur">
        <a href="#"><img src="public/img/bieres-en-stocknoel.jpg" alt="logo bières en stock" class="rounded-circle"></a>
        <!--MENU AVEC MENU BURGER-->
        <button class="navbar-toggler" id="java" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center " id="collapsibleNavbar">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white disabled" href="#">Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white disabled" href="#">Boutique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white disabled" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#Modal">
          Connexion
        </button>
  </div>
  </nav>
  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Connectes-toi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="traitement.php" method="post">
            <div class="form-group">
              <label for="InputEmail1">Adresse Mail</label>
              <input type="email" required class="form-control" id="InputEmail1" placeholder="Email" required>
              <span id="mailErrormodal"></span>
            </div>
            <div class="form-group">
              <label for="InputPassword1">Mot de passe</label>
              <input type="password" required class="form-control" id="InputPassword1" placeholder="Mot de passe"
                required>
              <span id="mdpError"></span>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-dismiss="modal"
              data-target="#inscriptionModal">
              Inscription
            </button>
            <button type="submit" id="envoi_modal" class="btn btn-outline-success">Connexion</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal  inscription-->
  <div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inscriptionModalLabel">Inscris-toi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="traitement.php" method="post">
            <div class="form-group text-center">
              <input type="text" required class="form-control" id="InputNomInscription" placeholder="Nom de famille"
                required>
              <span id="missnom2"></span>
            </div>
            <div class="form-group text-center">
              <input type="text" required class="form-control" id="InputPrenomInscription" placeholder="Prénom">
              <span id="missPrenom1"></span>
            </div>
            <div class="form-group text-center">
              <input type="email" required class="form-control" id="InputEmailInscription" aria-describedby="emailHelp"
                placeholder="Email">
              <span id="mailErrormodal1"></span>
            </div>
            <div class="form-group text-center">
              <input type="password" required class="form-control" id="InputPasswordInscription"
                placeholder="Mot de passe">
              <span id="mdpError1"></span>
            </div>
            <div class="form-group text-center">
              <input type="password" required class="form-control" id="InputRepeatPasswordInscription"
                placeholder="Vérification du mot de passe">
              <span id="mdpError2"></span>
            </div>
            <button type="submit" id="envoi_inscription" class="btn btn-outline-success">Inscription</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </nav>

  <img class="decon" id="disp" src="public/img/deco.png" alt="" onclick='disparu()'>
  <!--FUTUR SLIDER-->
  <div id="slider">
    <button id="left-arrow" class="btn btn-outline bg-danger w-10" onclick=gauche()>
      < </button> <div id="wrapper" class="container-fluid" style="width: 100%;">
  </div>
  <button id="right-arrow" class="btn btn-outline bg-danger w-10" onclick=droite()>
    >
  </button>

  </div>

  </header>
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
  <footer>
    <div class="container my-5">
      <div class="container bg-light">
          <!-- A grey horizontal navbar that becomes vertical on small screens -->
          <footer class="container">
              <nav class="navbar navbar-expand-sm bg-light navbar-dark justify-content-center">

                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <!-- Links -->
                  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                      <ul class="navbar-nav">
                          <li class="nav-item bg-muted ">
                              <a class="nav-link text-warning" href="index.html">Accueil</a>
                          </li>
                          <li class="nav-item bg-muted">
                              <a class="nav-link  text-warning" href="presentation.html">Présentation</a>
                          </li>
                          <li class="nav-item bg-muted">
                              <a class="nav-link  text-warning" href="boutique.html">Boutique</a>
                          </li>
                          <li class="nav-item bg-muted">
                              <a class="nav-link  text-warning" href="blog.html">Blog</a>
                          </li>
                          <li class="nav-item bg-muted">
                              <a class="nav-link  text-warning" href="contact.html">Contact</a>
                          </li>
                      </ul>
                  </div>
              </nav>



              </section>

              <section id="basdepage">
                  <div class="row">
                      <div class="col-sm-12 col-lg-7">
                          <aside class="couleur">
                              <a href="liens.html">-Les ouvertures de
                                  nouveaux magasins de vente de bières </a>
                          </aside>
                      </div>
                      <div class="col-sm-12 col-lg-5 mx-auto justify-content-center">
                          <aside class="reseaux">
                              <ul>
                                  <li><a href="page404.html" class='couleur'><img src="public/img/logo-facebook.png"></a></li>
                                  <li><a href="instagram" class='couleur'><img src="public/img/logo_Instagram.png"></a></li>
                              </ul>
                          </aside>
                      </div>
                  </div>
              </section>


              <p><a class="plan couleur" href="sitemap.html">-Plan du site</a></p>
              <div class="mentions couleur"><a href="mentions.html">
                      <p>&copy tous droits réservés léo. Mentions légales
                  </a></p>
              </div>
      </div>
  </div>
  </footer>
</body>

<?php //include_once 'layouts/scriptJS.php'; ?> 

</html>