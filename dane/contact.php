<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/contact.css">
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
  </body>
</html>
