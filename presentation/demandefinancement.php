<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-fixe.css">
    <link rel="stylesheet" href="css/rapide.css">
    <link rel="stylesheet" href="./css/style-form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <title>Ma demande</title>
  </head>

  <body>
    <header>
    <?php include('includes/nav.php'); ?>
    </header>
    <?php
    include('includes/rapide.php');
     ?>
    <div class="initprojet">
      <p class="textinit">Pour mieux vous accompagner, nous avons besoin de comprendre votre projet</p>
      <button type="button" name="button" id="boutonstart" class="envoi">J'ai un projet</button><br><br>
    </div>

    <div class="choixprojet">
      <button type="button" name="button" id="boutonpro" class="envoi">Financement Professionnel</button>
      <button type="button" name="button" id="boutonimmo" class="envoi">Financement immobilier</button>
      <button type="button" name="button" id="boutonassu" class="envoi">Assurances emprunteurs</button>
      <button type="button" name="button" id="boutonpresta" class="envoi">Prestation de services</button>
    </div>

    <div class="jshide" id="propart">
      <?php include('financepro.php'); ?>
    </div>

    <div class="jshide" id="immopart">
      <?php include('financeimmo.php'); ?>
    </div>

    <div class="jshide" id="prestapart">
      <?php include('financepresta.php'); ?>
    </div>
    <div class="jshide" id="assupart">
      <?php include'financeassu.php'; ?>
    </div>


  </main>
    <footer>
      <?php include('includes/footerv2.php'); ?>
    </footer>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/demandefinancement.js"></script>
  <script type="text/javascript" src="js/contact.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</html>
