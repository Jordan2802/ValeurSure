<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire de demande de financement</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-fixe.css">
    <link rel="stylesheet" href="./css/style-form.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body>

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
      </div><br><br><br>

      <form class="formulaire" id="formulaire1" action="formfinance2.php" method="post">
        <br>
        <label for="sexe">Civilité: </label>
        <select id="sexe" class="mrmme" name="sexe">
          <option class="option" value="homme">Homme</option>
          <option class="option" value="femme">Femme</option>
        </select><br><br>
        <label for="nom">Nom: </label><br>
        <input type="text" name="nom" class="line" id="nom" value="" required><br><br>
        <label for="prenom">Prenom: </label><br>
        <input type="text" name="prenom" class="line" id="prenom" value="" required><br><br>
        <label for="tel">Téléphone: </label><br>
        <input type="text" id="tel" name="tel" class="line" value="" required><br><br>
        <label for="adresse">Adresse: </label><br>
        <input type="text" id="adresse" name="adresse" class="line" value="" required><br><br>

        <div id="zipbox"class="control-group">
          <label for="postal">Code postal: </label><br>
          <input type="text" id="postal" name="postal" class="line" value="" maxlength="5" required><br><br>
        </div>
        <div class="control-group">
          <label for="ville">Ville: </label><br>
          <input type="text" id="ville" name="ville" class="line" value="" required><br><br><br>
        </div>

        <input class="envoi" type="submit" name="" value="ETAPE SUIVANTE"><br><br><br>
      </form>
      <div class="g-recaptcha" data-sitekey="6LchTWIUAAAAAJIQIi7cgdg_JBpmVA9FuQz07ed0"></div>
    </div><br>

  </body>

  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script> -->
  <script type="text/javascript" src="./js/formfinance.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

</html>
