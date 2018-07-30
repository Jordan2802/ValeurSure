<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="favicon.ico"/>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/rapide.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <title>ValeurSure</title>
</head>

<body>
  <header id="head">
    <?php include('includes/nav.php'); ?>
    <div id="carou" class="slider hide-on-small-only fullscreen">
      <ul class="slides">
        <li>
          <img src="img/image1.jpg"> <!-- random image -->
          <div class="caption left-align amber-text text-darken-2 ">
            <h3 class="titre-carou">Notre métier ? Financer l'activité et le patrimoine de l'Entrepreneur.</h3>
            <h5 class=" amber-text "><a href="prestation.php" class="waves-effect waves-light btn-large">Plus d'info...</a> </h5>
          </div>
        </li>
        <li>
          <img src="img/image2.jpg"> <!-- random image -->
          <div class="caption left-align amber-text text-darken-2">
            <h3 class="titre-carou">Gérez voter activité, nous gérons vos finances.</h3>
            <h5 class=" amber-text "><a href="prestation.php#position4" class="waves-effect waves-light btn-large">Plus d'info...</a> </h5>
          </div>
        </li>
        <li>
          <img src="img/image3.jpg"> <!-- random image -->
          <div class="caption right-align amber-text text-darken-2">
            <h3 class="titre-carou">ValeurSûre, et se financer devient un jeu d'enfant.</h3>
            <h5 class=" amber-text "><a href="apropos.php#lien-engagement" class="waves-effect waves-light btn-large">Plus d'info...</a> </h5>
          </div>
        </li>
        <li>
          <img src="img/img3.png"> <!-- random image -->
          <div class="caption right-align amber-text text-darken-2">
            <h3 class="titre-carou">Un projet ? Parlez-en à votre expert.</h3>
            <h5 class=" amber-text "><a href="contact.php" class="waves-effect waves-light btn-large">Plus d'info...</a> </h5>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <?php
include('includes/rapide.php');
   ?>

    <main class="first">
      <div class="wow fadeInUpBig intro">

        <div class="info"> <q> Le choix d’un Courtier en crédits s’apparente à celui d’un Banquier. Assurez-vous d’avoir le bon interlocuteur, qualifié et compétent, afin de mener à bien votre projet.</q></div>

        <div class="introduction">
          Pour financer votre entreprise, il est important de déterminer sa solvabilité. Et pour financer votre patrimoine, il faut vérifier que l’entreprise est suffisamment pérenne pour vous assurer des revenus réguliers. C’est pourquoi tous vos projets de financement,
          qu’ils soient privés ou professionnels, sont gérés en banque par un Conseiller spécialisé, ayant les compétences requises. <br><br> Le choix d’un Courtier en crédits s’apparente à celui d’un Banquier. Assurez-vous d’avoir le bon interlocuteur,
          qualifié et compétent, afin de mener à bien votre projet. <br><br>Le crédit professionnel ou crédit immobilier à destination des professionnels, est un métier à part entière.
        </div>

      </div>

      <div id="categories">

        <a href="#" class="sec-conseil">
          <section class="wow fadeInRight">
            <h2 class="section-name">Conseil</h2>
            <p class="description show--hover">Conseil en gestion financière d’entreprise : gestion de trésorerie, optimisation fiscale, choix des investissements</p>
          </section>
        </a>

        <a href="#" class="sec-cred-pro">
          <section class="wow fadeInLeft">
            <h2 class="section-name">Courtier en crédits professionnels</h2>
            <p class="description show--hover">Recherche de financements : crédits professionnels, leasing, Crédit-Bail, financement participatif</p>
          </section>
        </a>

        <a href="#" class="sec-simul">
          <section class="wow fadeInLeft ">
            <h2 class="section-name">Simulateurs</h2>
            <p class="description show--hover">Vous souhaitez connaître vos mensualités, le montant que vous pouvez emprunter et sur quelle durée ? Obtenez ces informations en quelques clics.</p>
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
        </a>

        <a href="#" class="sec-assu-empr">
          <section class="wow fadeInUp ">
            <h2 class="section-name">Courtier en Assurances Emprunteurs</h2>
            <p class="description show--hover">Quod et etiam amicitia quidem saepe ad id se quidem utilitates profecta coluntur simulatione quod an coniungendam an profecta amicitia. Proposition d’Assurances Emprunteurs pour les professionnels et les particuliers.</p>
          </section>
        </a>

        <section class="wow fadeInRight img-2">
        </section>

        <a href="#" class="sec-cred-immo">
          <section class="wow fadeInRight ">
            <h2 class="section-name">Courtier en crédits immobiliers</h2>
            <p class="description show--hover">Recherche de financements : crédits immobiliers, crédits à la consommation</p>
          </section>
        </a>

        <a href="#" class="sec-formation">
          <section class="wow fadeInRight ">
            <h2 class="section-name">Formation</h2>
            <p class="description show--hover">Formation en finances d’entreprises : Business Plan, approches comptables et financières d’une entreprises</p>
          </section>
        </a>

          <section class="wow fadeInLeft media-twi">
            <a class="twitter-timeline" data-height="5000" href="https://twitter.com/_Valloa_?ref_src=twsrc%5Etfw">Tweets by _Valloa_</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </section>

          <section class="wow fadeInUp media-lin">
            <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
            <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="fr_FR" data-type="vertical" data-theme="dark" data-vanity="guillaume-kusberg-046926166"><a class="LI-simple-link" href='https://fr.linkedin.com/in/guillaume-kusberg-046926166?trk=profile-badge'>Guillaume kusberg</a></div>
          </section>

       <!-- <section class="wow fadeInUp img-1">
        </section>-->

      </div>

    </main>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>new WOW({mobile:false}).init();</script>

</body>

</html>
