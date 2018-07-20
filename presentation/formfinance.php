<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire de demande de financement</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style-form.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

  </head>

  <body>
    <header>
      <?php include('includes/nav.php'); ?>
      <div class="barre-burger">
        <button id="hamburger-button" onclick="cacher();"></button>
      </div>
    </header>
    <h1 class="bande">DEMANDE DE FINANCEMENT</h1>
    <div class="form-container">

      <div class="progression">
        <div class="bulle actuel">
          <p class="etape">1</p>
        </div>
        <div class="bulle">
          <p class="etape">2</p>
        </div>
        <div class="bulle">
          <p class="etape">fin</p>
        </div>
      </div> <br> <br> <br>

      <form class="formulaire z-depth-3" id="formulaire1" action="formfinance2.php" method="post">
        <br>
        <div class="input-field">

          <select id="sexe" class="mrmme">
            <option class="option" value="homme">Homme</option>
            <option class="option" value="femme">Femme</option>
          </select>
          <label>Civilité: </label>

        </div>
        <div class="input-field">
          <input type="text" name="nom" class="line" id="nom" value="" required>
          <label for="nom">Nom: </label>
        </div>
        <div class="input-field">
          <input type="text" name="prenom" class="line" id="prenom" value="" required>
          <label for="prenom">Prenom: </label>
        </div>
        <div class="input-field">
          <input type="text" id="tel" name="tel" class="line" value="" required>
          <label for="tel">Téléphone: </label>
        </div>
        <div class="input-field">
          <input type="text" id="adresse" name="adresse" class="line" value="" required>
          <label for="adresse">Adresse: </label>
        </div>

        <div id="zipbox"class="control-group">
          <div class="input-field">
            <input type="text" id="postal" name="postal" class="line" value="" maxlength="5" required>
            <label for="postal">Code postal: </label>
          </div>
        </div>
        <div class="control-group">
          <div class="input-field">
            <input type="text" id="city" name="city" class="line" value="" required>
            <label for="city">Ville: </label>
          </div>

    <button class="large-btn waves-effect waves-light envoi z-depth-2" type="submit" name="action">ÊTAPE SUIVANTE
    </button>


      </form>
      <div class="g-recaptcha" data-sitekey="6LchTWIUAAAAAJIQIi7cgdg_JBpmVA9FuQz07ed0"></div>
    </div>
  </div>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
  </body>

  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script> -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/formfinance.js"></script>
  <script type="text/javascript" src="js/burger.js"></script>
  <script type="text/javascript" src="js/contact.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
 $('select').formSelect();
});
  </script>

</html>
