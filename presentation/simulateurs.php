<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/sim.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/media.css">
  <title>Document</title>
</head>
<body>

  <header>
    <?php include('includes/nav.php'); ?>
  </header>

  <main>


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
  <script type="text/javascript" src="js/burger.js"></script>

</body>
</html>
