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
  </head>

  <body>

    <header>
      <?php include('nav.php'); ?>
    </header>
    <div class="form-container">

    <h1 class="bande">DEMANDE DE FINANCEMENT</h1>
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
      <select id="sexe" name="sexe">
        <option value="homme">Mr</option>
        <option value="femme">Mme</option>
      </select><br><br>
      <label for="nom">Nom: </label><br>
      <input type="text" name="nom" class="line" id="nom" value="" required><br><br>
      <label for="prenom">Prenom: </label><br>
      <input type="text" name="prenom" class="line" id="prenom" value="" required><br><br>
      <label for="tel">Téléphone: </label><br>
      <input type="text" id="tel" name="tel" class="line" value="" required><br><br>
      <label for="adresse">Adresse: </label><br>
      <input type="text" id="adresse" name="adresse" class="line" value="" required><br><br>
      <label for="postal">Code postal: </label><br>
      <input type="text" id="postal" name="postal" class="line" value="" maxlength="5" required><br><br>
      <label for="Ville">Ville: </label><br>
      <input type="text" id="ville" name="ville" class="line" value="" required><br><br><br>

      <input class="envoi" type="submit" name="" value="ETAPE SUIVANTE"><br><br><br>
    </form>
  </div>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
  </body>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script>
  <script type="text/javascript" src="./js/script.js"> -->
</html>
