<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/rapide.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <title>ValeurSure</title>
</head>

<body>
  <header id="head">
    <?php include('includes/nav.php'); ?>
    <div id="slider">

      <div class="slider">
        <div class="slide"><a href="prestation.php">Notre métier? Financer l’activité et le patrimoine de l’Entrepreneur <br><span>Plus d'infos...</span> </a></div>
        <div class="slide"><a href="prestation.php#lien-finances">Gérez votre activité, nous gérons vos finances <br><span>Plus d'infos...</span></a> </div>
        <div class="slide"><a href="apropos.php#lien-engagement">ValeureSûre, et se financer devient un jeu d’enfant <br><span>Plus d'infos...</span></a> </div>
        <div class="slide"><a href="contact.php">Un projet? Parlez-­en à votre expert <br><span>Plus d'infos...</span></a></div>
      </div>
    </div>
    <div class="barre-burger">
      <button id="hamburger-button" onclick="cacher();"></button>
    </div>

  </header>
  <?php
include('includes/rapide.php');
   ?>

    <main>
      <div class="delay_1s animated fadeInLeftBig intro">

        <div class="info"> <q> Le choix d’un Courtier en crédits s’apparente à celui d’un Banquier. Assurez-vous d’avoir le bon interlocuteur, qualifié et compétent, afin de mener à bien votre projet.</q></div>

        <div class="introduction">
          Pour financer votre entreprise, il est important de déterminer sa solvabilité. Et pour financer votre patrimoine, il faut vérifier que l’entreprise est suffisamment pérenne pour vous assurer des revenus réguliers. C’est pourquoi tous vos projets de financement,
          qu’ils soient privés ou professionnels, sont gérés en banque par un Conseiller spécialisé, ayant les compétences requises. <br><br> Le choix d’un Courtier en crédits s’apparente à celui d’un Banquier. Assurez-vous d’avoir le bon interlocuteur,
          qualifié et compétent, afin de mener à bien votre projet. <br><br>Le crédit professionnel ou crédit immobilier à destination des professionnels, est un métier à part entière.
        </div>

      </div>

      <div id="categories">
        <section class="delay_1s animated fadeInRight sec-conseil">
          <h2 class="section-name">Conseil</h2>
          <p class="description show--hover">Conseil en gestion financière d’entreprise : gestion de trésorerie, optimisation fiscale, choix des investissements</p>
        </section>

        <section class="delay_1s animated fadeInLeft sec-cred-pro">
          <h2 class="section-name">Courtier en crédits professionnels</h2>
          <p class="description show--hover">Recherche de financements : crédits professionnels, leasing, Crédit-Bail, financement participatif</p>
        </section>


        <section class="delay_1s animated fadeInLeft sec-simul">
          <h2 class="section-name">Simulateurs</h2>
          <p class="description show--hover">Quod et etiam amicitia quidem saepe ad id se quidem utilitates profecta coluntur simulatione quod an coniungendam an profecta amicitia.</p>
          <!--
        <div class="selecteur">
        <select name="" id="">
        <option value="">Selectionnez un simulateur</option>
        <option value="cap-emprunt">Capacité d'emprunt</option>
        <option value="capital">Capital</option>
        <option value="mensualite">Mensualité</option>
      </select>
      <input class="button-simul" type="button" value="Aller au simulateur">
    </div>
  -->
        </section>

        <section class="delay_1s animated fadeIn sec-assu-empr">
          <h2 class="section-name">Courtier en Assurances Emprunteurs</h2>
          <p class="description show--hover">Quod et etiam amicitia quidem saepe ad id se quidem utilitates profecta coluntur simulatione quod an coniungendam an profecta amicitia. Proposition d’Assurances Emprunteurs pour les professionnels et les particuliers.</p>
        </section>

        <section class="delay_1s animated fadeInRight img-2">
        </section>

        <section class="delay_1s animated fadeInRight sec-cred-immo">
          <h2 class="section-name">Courtier en crédits immobiliers</h2>
          <p class="description show--hover">Recherche de financements : crédits immobiliers, crédits à la consommation</p>
        </section>

        <section class="delay_1s animated fadeInRight sec-formation">
          <h2 class="section-name">Formation</h2>
          <p class="description show--hover">Formation en finances d’entreprises : Business Plan, approches comptables et financières d’une entreprises</p>
        </section>

        <section class="delay_1s animated fadeInLeft media-twi">
          <a class="twitter-timeline" data-height="5000" href="https://twitter.com/_Valloa_?ref_src=twsrc%5Etfw">Tweets by _Valloa_</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>


        <section class="delay_1s animated fadeIn media-lin">
          <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
          <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="fr_FR" data-type="vertical" data-theme="dark" data-vanity="guillaume-kusberg-046926166"><a class="LI-simple-link" href='https://fr.linkedin.com/in/guillaume-kusberg-046926166?trk=profile-badge'>Guillaume kusberg</a></div>
        </section>

        <section class="delay_1s animated fadeIn img-1">
        </section>

      </div>

    </main>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/burger.js"></script>
</body>

</html>
