<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/prestation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/rapide.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <header>
      <?php include('includes/nav.php'); ?>
      <div class="barre-burger">
        <button id="hamburger-button" onclick="cacher();"></button>
      </div>
    </header>
    <?php
    include('includes/rapide.php');
     ?>
    <main>
      <div class="intro-projet">
        <p>Votre projet est important car il vous représente, il vous permet de vous réaliser et de concrétiser une longue période de réflexion. Et même si vous n’êtes qu’à l’état d’idée, ValeurSûre peut vous aider à y voir plus clair et vous guider.</p>
      </div>
      <div class="prestations">
        <div class="">

          <h2 id="lien-creditpro">Courtier en crédits professionnels</h2>
          <p class="">A la recherche d’une solution de financement à usage professionnel ? Vous êtes au bon endroit. ValeurSûre vous propose un accompagnement sur-mesure car la solution découlera de l’expression de votre besoin et de vos attentes.</p>
          <p class="">Quelques exemples de financements :</p>

          <div class="">
            <h4>LE CREDIT BANCAIRE :</h4>
            <p>Formule la plus répandue, le crédit bancaire requiert généralement un apport. Son montant varie en fonction du projet mais pour mettre toutes les chances de votre côté afin d’obtenir un accord, l’apport doit atteindre au moins 30% du montant total du projet.</p>
          </div>
          <div class="">
            <h4>CREDIT-BAIL :</h4>
            <p>L’acquisition par crédit-bail est possible pour un bien mobilier ou immobilier. L’établissement financier, appelé le bailleur, achète le bien et vous le loue pour une durée déterminée. A l’issu, celui-ci vous appartient moyennant le paiement d’une Valeur Résiduelle, généralement comprise entre 1 et 10% du montant initiale de l’investissement.</p>
          </div>
          <div class="">
            <h4>LE FINANCEMENT PARTICIPATIF (CROWDFUNDING) :</h4>
            <p>De plus en plus plébiscitée par les Entrepreneurs, le Crowdfunding permet de faire financer son entreprise par des investisseurs privés, moyennant des contreparties qui sont à définir en fonction de vos besoins (parts du capital, produit offert, prestation offerte, expérience de type « découverte de votre entreprise » etc.).</p>
          </div>
        </div>

        <div class="form">
          :D
        </div>

      </div>

      <div class="prestations">
        <h2 id="lien-creditimmo">Courtier en crédits immobiliers</h2>
        <p>Recherche de financements : crédits immobiliers, crédits à la consommation</p>
      </div>

      <div class="prestations">
        <h2 id="lien-emprunt">Courtier en Assurances Emprunteurs</h2>
        <p>Proposition d’Assurances Emprunteurs pour les professionnels et les particuliers.</p>
      </div>

      <div class="prestations">
        <h2 id="lien-finances">Conseil pour gérer les finances de votre entreprise</h2>
        <p>Conseil en gestion financière d’entreprise : gestion de trésorerie, optimisation fiscale, choix des investissements</p>
      </div>

      <div class="prestations">
        <h2 id="lien-formation">Formation</h2>
        <p>Formation en finances d’entreprises : Business Plan, approches comptables et financières d’une entreprises</p>
      </div>

    </main>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/burger.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
  </body>
</html>
