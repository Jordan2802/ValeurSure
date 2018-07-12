<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/prestation.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <header>
      <?php include('includes/nav.php'); ?>
      <button id="hamburger-button" onclick="cacher();"></button>
    </header>


    <div class="prestations">
      <h2 id="lien-creditpro">Courtier en crédits professionnels</h2><br>
      <p>Recherche de financements : crédits professionnels, leasing, Crédit-Bail, financement participatif</p>
    </div>

    <div class="prestations">
      <h2 id="lien-creditimmo">Courtier en crédits immobiliers</h2><br>
      <p>Recherche de financements : crédits immobiliers, crédits à la consommation</p>
    </div>

    <div class="prestations">
      <h2 id="lien-emprunt">Courtier en Assurances Emprunteurs</h2><br>
      <p>Proposition d’Assurances Emprunteurs pour les professionnels et les particuliers.</p>
    </div>

    <div class="prestations">
      <h2 id="lien-finances">Conseil pour gérer les finances de votre entreprise</h2><br>
      <p>Conseil en gestion financière d’entreprise : gestion de trésorerie, optimisation fiscale, choix des investissements</p>
    </div>

    <div class="prestations">
      <h2 id="lien-formation">Formation</h2><br>
      <p>Formation en finances d’entreprises : Business Plan, approches comptables et financières d’une entreprises</p>
    </div>

    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/burger.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
  </body>
</html>
