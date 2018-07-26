<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/rapide.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title>Contact</title>
  </head>
  <body>
    <header>
    <?php include('includes/nav.php'); ?>
    </header>
    <main>

      <div class="formulaire-contact">
        <form class="form" action="#" method="post">
          <div class="input-field">
          <input type="text" >
          <label for="">Nom:</label>
          </div>
          <div class="input-field">
          <input type="text" >
          <label for="">Email:</label>
          </div>
          <div class="input-field">
          <input type="text" >
          <label for="">Objet:</label>
          </div>
          <div class="input-field">
          <textarea class="materialize-textarea" name="message"></textarea>
          <label for="">Message:</label>
          </div>
          <div class="input-field">
          <button class="btn waves-effect waves-light" name="message" type="submit" name="button" value="Envoyer">Envoyer</button>
          </div>
        </form>
      </div>
    </main>
    <footer>
      <?php include('includes/footer.php'); ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  </body>
</html>
