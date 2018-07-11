<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/media.css">
    <title>Contact</title>
  </head>
  <body>
    <header>
      <?php
      include ('nav.php');
       ?>
    </header>
    <div class=formulaire>
      <form class="form" action="#" method="post">
        <input type="text" placeholder="Nom"><br>
        <input type="text" placeholder="Email"><br>
        <input type="text" placeholder="Objet"><br>
        <textarea rows="8" cols="80"></textarea><br>
        <input class="button" type="submit" value="Valide">
      </form>
    </div>
    <footer>
      <?php
      include ('footer.php');
       ?>
    </footer>
    <script type="text/javascript" src="../js/burger.js"></script>
  </body>
</html>
