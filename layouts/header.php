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
              <a class="nav-link text-white" href="index.php">Accueil</a>
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
              <a class="nav-link text-white" href="contact.php">Contact</a>
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