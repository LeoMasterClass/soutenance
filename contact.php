<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bières en stock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
      <nav class="navbar navbar-expand-md navigateur ">
        <a href="#"><img src="public/img/bieres-en-stocknoel.jpg" alt="logo bières en stock" class="rounded-circle"></a>
        <!--MENU AVEC MENU BURGER-->
        <button class="navbar-toggler" id="java" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">

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
            <!--/ ------------------------------------------ /-->
            <div class="form-group text-center">
              <input type="search" required class="form-control" id="InputAdress" aria-describedby=""
                placeholder="Adresse" onkeyup="search()">
              <ul id='adressList'></ul>
            </div>
            <!--/ ------------------------------------------ /-->
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
  </header>
  <section class="container-fluid pt-5 mt-5 p-2">
    <div class="form-check mt-3 mb-3 relou">
      <input class="form-check-input" type="radio" name="exampleRadios" id="gender-male1" value="Mr">
      <label class="form-check-label mr-5" for="gender-male1">
        Mr.
      </label>
      <input class="form-check-input" type="radio" name="exampleRadios" id="gender-female1" value="Mme">
      <label class="form-check-label" for="gender-female1">
        Mme.
      </label>
    </div>
    <div class="form-group col-lg-6 offset-lg-3">
      <label for="InputNom1">Nom</label>
      <input type="text" class="form-control firstNameSlack" id="InputNom1" placeholder="Votre Nom" required>
      <span id="missnom"></span>
    </div>
    <div class="form-group col-lg-6 offset-lg-3">
      <label for="InputPrenom1">Prénom</label>
      <input type="text" class="form-control nameSlack" id="InputPrenom1" placeholder="Votre Prénom" required>
      <span id="missPrenom"></span>
    </div>
    <div class="form-group col-lg-6 offset-lg-3">
      <label for="InputEmail2">Adresse Mail</label>
      <input type="email" class="form-control mailSlack" id="InputEmail2" placeholder="Votre Mail" required>
      <span id="mailError"></span>
    </div>
    <div class="form-group col-lg-6 offset-lg-3">
      <label for="InputObjet1">Objet</label>
      <input type="text" class="form-control objectSlack" id="InputObjet1" placeholder="L'objet de votre message">
    </div>
    <div class="form-group col-lg-6 offset-lg-3">
      <label for="InputMessage1">Votre Message</label>
      <textarea class="form-control messageSlack" name="InputMessage1" id="InputMessage1" placeholder="Votre Message"
        cols="30" rows="5"></textarea>
    </div>
    <div class="text-center">
      <button id="bouton_envoi" class="btn btn-outline-light col-lg-3 col-md-3 col-sm-3 mb-3" onclick="submit()">Envoyer</button>
    </div>

  </section>

  <footer>
    <div class="container">
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

  </div>

</body>
<script src="public/js/cookiebar.js"></script>
<script src="public/js/modal.js"></script>
<script src="public/js/cred.js"></script>
<script src="public/js/ApiSlack.js"></script>
<script src="public/js/ApiGeoGouv.js"></script>
<script src="public/js/regex.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</html>