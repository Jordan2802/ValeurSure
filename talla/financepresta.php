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
        <fieldset class="fieldform" id="formprestapart1">

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

        <fieldset class="fieldform" id="formprestapart2">
          <p class="bandeaufile">Coordonnées de la personne à contacter</p>

          <label for="sexecontactpresta"></label>
          <select class="mrmme" id="sexecontactpresta" name="sexecontactpresta">
            <option value="homme">Mr</option>
            <option value="femme">Mme</option>
          </select><br>
          <label for="nomcontactpresta">Nom:</label><br>
          <input type="text" class="line" id="nomcontactpresta" name="nomcontactpresta" value=""><br>
          <label for="prenomcontactpresta">Prenom:</label><br>
          <input type="text" class="line" id="prenomcontactpresta" name="prenomcontactpresta" value=""><br>
          <label for="societecontactpresta">Société:</label><br>
          <input type="text" class="line" id="societecontactpresta" name="societecontactpresta" value=""><br>
          <label for="emailcontactpresta">E-mail:</label><br>
          <input type="email" class="line" id="emailcontactpresta" name="emailcontactpresta" value=""><br>
          <label for="portablecontactpresta">Portable:</label><br>
          <input type="tel" class="line" id="portablecontactpresta" name="portablecontactpresta" value=""><br>
          <label for="fixecontactpresta">Fixe:</label><br>
          <input type="tel"  class="line" id="fixecontactpresta" name="fixecontactpresta" value=""><br>

        </fieldset>
      </form>
    </div>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/financepresta.js"></script>
</html>
