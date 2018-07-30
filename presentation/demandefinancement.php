<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rapide.css">
    <link rel="stylesheet" href="css/style-form.css">
    <link rel="stylesheet" href="css/demande.css">
    <link rel="icon" href="favicon.ico"/>
    <title>Ma demande</title>
  </head>

  <body>
    <header>
    <?php include('includes/nav.php'); ?>
    </header>
    <main>

    <?php
    include('includes/rapide.php');
     ?>

    <div class="initprojet">
      <p class="textinit">Pour mieux vous accompagner, nous avons besoin de comprendre votre projet</p>
      <a class="waves-effect waves-light btn-large" id="boutonstart">J'ai un projet</a>
    </div>

    <div class="choixprojet">
      <a class="waves-effect waves-light btn-large" id="boutonpro">Financement Professionnel</a>
      <a class="waves-effect waves-light btn-large" id="boutonimmo">Financement immobilier</a>
      <a class="waves-effect waves-light btn-large" id="boutonassu">Assurances emprunteurs</a>
      <a class="waves-effect waves-light btn-large" id="boutonpresta">Prestation de services</a>
    </div>

    <div class="form-container">


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


    </div>

  </main>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>

  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="js/contact.js"></script>
  <script type="text/javascript" src="js/demandefinancement.js"></script>
  <script type="text/javascript" src="js/financepro.js"></script>
  <script type="text/javascript" src="js/financeassu.js"></script>
  <script type="text/javascript" src="js/financeimmo.js"></script>
  <script type="text/javascript" src="js/financepresta.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>

</html>
