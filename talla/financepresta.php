<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prestations de services</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-fixe.css">
    <link rel="stylesheet" href="./css/style-form.css">
  </head>
  <body>
    <div class="form-container">



      <form class="formulaire" id="formpresta" action="index.html" method="post">
        <p class="bandeaufile">Prestations de services</p>
        <fieldset class="fieldform">

          <label for="typepresta">Type de prestation</label><br>
          <select class="mrmme" id="typepresta" name="typepresta">
            <option value="conference">Conférence</option>
            <option value="intervention">Intervention pédagogique</option>
            <option value="conseil">Conseil</option>
          </select><br>
          <label for="prestaobjet">Objet:</label><br>
          <textarea name="prestaobjet" class="textarea" id="prestaobjet" rows="4" cols="80" maxlength="100"></textarea><br>
          <label for="prestaobjet">Public:</label><br>
          <select class="mrmme" id="prestaobjet" name="prestaobjet">
            <option value="entrepreneur">Entrepreneur</option>
            <option value="createur">Créateurs d'entreprise</option>
            <option value="salaries">Salariés</option>
            <option value="etudiants">Etudiants</option>
          </select><br>
          <label for="prestaduree">Durée:</label><br>
          <textarea name="prestaduree" class="textarea" id="prestaduree" rows="8" cols="80" maxlength="60"></textarea><br>
          <label for="prestalieu">Lieu:</label><br>
          <textarea name="prestalieu" class="textarea" id="prestalieu" rows="8" cols="80" maxlength="60"></textarea><br>

        </fieldset>
      </form>
    </div>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/financepro.js"></script>
</html>
