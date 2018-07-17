<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title>Contact</title>
  </head>
  <body>
    <header>
    <?php include('includes/nav.php'); ?>
    <div class="barre-burger">
      <button id="hamburger-button" onclick="cacher();"></button>
    </div>
    </header>
    <main>

      <div class="formulaire-contact">
        <form class="form" action="#" method="post">
          <input type="text" placeholder="Nom"><br>
          <input type="text" placeholder="Email"><br>
          <input type="text" placeholder="Objet"><br>
          <textarea rows="8" cols="80"></textarea><br>
          <input class="button" type="submit" value="Valider">
        </form>
      </div>
    </main>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/burger.js"></script>
  </body>
</html>
