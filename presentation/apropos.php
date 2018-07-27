<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/apropos.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/media.css">
   <link rel="stylesheet" href="css/rapide.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
   <title>A propos</title>
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
  <div class="propos">
    <div class="wow fadeInLeft presentation">
      <h2 id="lien-presentation">Présentation</h2>
      <img src="img/gold_egg.jpg">
      <h4>"ValeurSûre est une agence de courtage spécialisée dans la recherche de financements pour les
           entrepreneurs"</h4><br><br>
      <p>Créée par un ancien Chargé de Clientèle Professionnelle en Banque, le financement des entreprises est dans notre ADN. De la conception à la réalisation, nous vous accompagnons dans chacune des étapes de votre projet, quel qu’il soit :<br><br>
        <ul>
          <li>Création ou reprise d’un Fonds de Commerce</li>
          <li>Acquisition de murs professionnels</li>
          <li>Travaux</li>
          <li>Achat de parts</li>
          <li>Matériels/machine/outil</li>
          <li>Véhicules</li>
          <li>Trésorerie</li>
          <li>Immobilier</li>
          <li>Assurances de prêts</li>
        </ul><br>
        <p>Pour cela, vous pouvez compter sur notre savoir-faire. Nous disposons d’un outil d’analyse unique permettant d’étudier votre projet de financement pour en connaître la faisabilité, avant de le soumettre aux banques. Ainsi, elles n’ont plus qu’à
          statuer sur votre dossier et définir les conditions de leur accompagnement.<br><br> Faire confiance à ValeurSûre, c’est la garantie de bénéficier du conseil d’un expert en crédits professionnels.
        </p>
    </div>
    <div class="wow fadeInLeft engagements">
      <h2 id="lien-engagement">Engagements</h2>
      <img src="img/credis.jpg">
      <p><b>Assurer un service de qualité :</b> Un dossier complet, clair et bien résumé, c’est l’assurance d’une réponse rapide en toute sérénité. ValeurSûre exige de ses équipes une expérience dans le domaine bancaire pour anticiper les exigences de la
        banque et réduire le délai de réponse.<br><br>
        <b>Défendre vos projets :</b> Au-delà des éléments écrits et des pièces constituant le dossier,
        <span class="gold_txt">ValeurSûre s’engage à comprendre votre projet et à se l’approprier pour mieux le défendre.</span> Cela implique parfois de vous conseiller sur un montage différent pour répondre aux exigences des financeurs.<br><br>
        <b>Proposer un accompagnement global :</b> Le financement est le début d’une aventure dont la suite est tout aussi importante. ValeurSûre s’engage à vous accompagner dans la négociation de vos services bancaires parce qu’une relation de partenariat
        s’envisage sur le long terme.</p>

    </div>
    <div class="wow fadeInLeft valeurs">
      <h2 id="lien-valeur">Valeurs</h2>
      <img src="img/up.jpg">
      <p><b>Le sens du service :</b> Points de départ d’un service de qualité, la disponibilité et le conseil sont au cœur de nos préoccupations. <span class="gold_txt">Notre devise : devenir une valeur sûre pour nos clients. Notre
           ambition : être l’interlocuteur privilégier pour les finances de votre entreprise.</span> La position d’intermédiaires que nous avons, nous permet d’avoir un regarde objectif sur le monde de la finance.<br><br>
        <b>Les compétences :</b> Parler de crédit, d’assurances Emprunteurs ou des finances de votre entreprise nécessite d’être formé et informé. Le rôle de nos collaborateurs est de vous présenter tous les éléments nécessaires pour que vous puissiez
        adopter la solution la plus pertinente par rapport à votre situation.<br><br>
        <b>La confiance :</b> Une relation d’affaires basée sur la confiance est ce qui motive notre quotidien. Et chaque projet est pour ValeurSûre l’occasion de renforcer cette confiance qui nous est chère puisque le financement est précieux dans la
        vie d’un Entrepreneur.</p>
    </div>
  </div>
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
