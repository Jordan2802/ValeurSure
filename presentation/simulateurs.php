<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/sim.css">
  <link rel="stylesheet" href="css/rapide.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>

  <header>
    <?php include('includes/nav.php'); ?>

  </header>
  <?php
  include('includes/rapide.php');
   ?>
  <main>
    <div class="">
      <h2>Simulateurs</h2>
      <p>Vous souhaitez connaître vos mensualités, le montant que vous pouvez emprunter et sur quelle
durée ? Obtenez ces informations en quelques clics.</p>
    </div>

    <div class="selecteur">
      <div class="tab">
        <button class="tablinks" onclick="openCalc(event, '#emprunt')" id="defaultOpen">Capacité d'emprunt</button>
        <button class="tablinks central-border" onclick="openCalc(event, '#capital')">Capital</button>
        <button class="tablinks" onclick="openCalc(event, '#mensualite')">Mensualité</button>
      </div>

      <div id="emprunt" class="tabcontent hidden">
        emprunt D:
      </div>

      <div id="capital" class="tabcontent hidden">
        capital D:
      </div>

      <div id="mensualite" class="tabcontent hidden">
        Mensualité D:
      </div>
    </div>

  </main>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript" src="js/contact.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

</body>
</html>
