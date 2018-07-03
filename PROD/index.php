<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>header +nav</title>
  </head>
  <body>
<header id="head">
  <nav>
  <ul id="menuSlide">
    <div class="logop">
    <i class="fab fa-wordpress"></i>
    </div>
    <li><a href="#">Accueil</a></li>
  <li><a href="#">A	propos de ValeurSure</a>
    <ul>
      <li><a href="#">Présentation</a></li>
      <li><a href="#">Engagements</a></li>
      <li><a href="#">Valeurs</a></li>
    </ul>
  </li>
  <li><a href="#">Nos prestations</a>
    <ul>
      <li><a href="#">Crédits professionnels</a></li>
      <li><a href="#">Crédit immobiliers</a></li>
      <li><a href="#">Assurances Emprunteurs</a></li>
      <li><a href="#">Conseils pour gérer les finances de votre entreprise</a></li>
      <li><a href="#">Formation</a></li>
    </ul>
  </li>
  <li><a href="#">Simulateurs</a>
    <ul>
      <li><a href="#">Capacité d'emprunt</a></li>
      <li><a href="#">Capital</a></li>
      <li><a href="#">Mensualité</a></li>
    </ul>
  </li>
  <li><a href="formfinance.php">Demande de financement</a></li>
  <li><a href="#">Contact</a></li>
  </ul>
  </nav>
<div id="slider">
<i class="fab fa-wordpress first"></i>
<div class="slider">

  <div class="slide"></div>
  <div class="slide"></div>
  <div class="slide"></div>
  <div class="slide"></div>

</div>
</div>
  </header>
  <div class="info"></div>
  <div class="tel" id="tel">
    <div class="fas fa-mobile-alt" onclick="slideTel()"></div>
    <div class="text cache" id="tel">00-00-00-00-00, adresse@hotmail.fr <br>
      <form class="" action="index.html" method="post">
        <label for="">Nom</label><input type="text" name="nom" value="">
        <label for="">Prenom</label><input type="text" name="" value="">
        <label for="">email</label><input type="mail" name="" value="">
        <label for="">message</label> <textarea name="name" rows="6" cols="30"></textarea>
        <input type="button" name="button" value="Envoyer">
      </form>
    </div>
  </div>

  <main>

    <div id="categories">

      <section class="sec-simul">
        <h2 class="section-name">Simulateurs</h2>
        <p class="description">Quod et etiam amicitia quidem saepe ad id se quidem utilitates profecta coluntur simulatione quod an coniungendam an profecta amicitia.</p>
        <div class="selecteur">
          <select name="" id="">
            <option value="">Selectionnez un simulateur</option>
            <option value="cap-emprunt">Capacité d'emprunt</option>
            <option value="capital">Capital</option>
            <option value="mensualite">Mensualité</option>
          </select>
          <input class="button-simul" type="button" value="Aller au simulateur">
        </div>
      </section>

      <section class="sec-cred-pro">
        <h2 class="section-name">Courtier en crédits professionnels</h2>
        <p class="description">Recherche de financements : crédits professionnels, leasing, Crédit-Bail, financement participatif</p>
      </section>

      <section class="sec-conseil">
        <h2 class="section-name">Conseil</h2>
        <p class="description">Conseil en gestion financière d’entreprise : gestion de trésorerie, optimisation fiscale, choix des investissements</p>
      </section>

      <section class="sec-assu-empr">
        <h2 class="section-name">Courtier en Assurances Emprunteurs</h2>
        <p class="description">Proposition d’Assurances Emprunteurs pour les professionnels et les particuliers.</p>
      </section>

      <section class="sec-cred-immo">
        <h2 class="section-name">Courtier en crédits immobiliers</h2>
        <p class="description">Recherche de financements : crédits immobiliers, crédits à la consommation</p>
      </section>

      <section class="sec-formation">
        <h2 class="section-name">Formation</h2>
        <p class="description">Formation en finances d’entreprises : Business Plan, approches comptables et financières d’une entreprises</p>
      </section>

      <section class="media-twi">
        <a class="twitter-timeline" data-height="5000" href="https://twitter.com/_Valloa_?ref_src=twsrc%5Etfw">Tweets by _Valloa_</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </section>

      <section class="media-lin">
        <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
        <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="fr_FR" data-type="vertical" data-theme="dark" data-vanity="guillaume-kusberg-046926166"><a class="LI-simple-link" href='https://fr.linkedin.com/in/guillaume-kusberg-046926166?trk=profile-badge'>Guillaume kusberg</a></div>
      </section>

    </div>


  </main>
  <footer>
    <?php include('footer.php'); ?>
  </footer>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
