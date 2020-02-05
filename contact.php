<?php require_once 'layouts/head.php'; ?>

<body>

<!-- header -->
<?php require_once 'layouts/header.php'; ?>

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

<!-- footer -->
<?php require_once 'layouts/footer.php' ?>

</body>

<?php include_once 'layouts/scriptJS.php'; ?> 

</html>