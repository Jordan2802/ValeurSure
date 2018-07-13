<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>financement immo</title>*
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-fixe.css">
    <link rel="stylesheet" href="./css/style-form.css">
  </head>
  <body>
    <div class="form-container">
      <form class="formulaire" action="index.html" method="post">
        <label for="immoprojet">Objet du financement:</label><br>
        <select class="mrmme" name="immoprojet" id="immoprojet">
          <option value="principal">Résidence principale</option>
          <option value="secondaire">Résidence secondire</option>
          <option value="locative">Résidence locative</option>
          <option value="travaux">Travaux</option>
          <option value="renegociation">Renégociation de prêt</option>
        </select><br>
        <label for="immodescription">Description: <div id="compteimmo1"></div></label>
        <textarea name="descriptionimmo" class="textarea" id="immodescription" rows="4" cols="80" maxlength="100" ></textarea><br>
        <label for="immopostal">Code postal:</label><br>
        <input type="text" class="line" id="immopostal" name="postal" value=""><br>
        <label for="immoville">Ville:</label><br>
        <input type="text" class="line" id="immoville" name="ville" value=""><br>
        <label for="immoavancement">Etat d'avancement:</label><br>
        <select class="mrmme" id="proavancement" name="">
          <option value="reflexion">En reflexion</option>
          <option value="etude">Etude du budget</option>
          <option value="recherche">Recherche de financement</option>
          <option value="signature">Signature compromis</option>
          <option value="attente">En attente proposition banque ou courtier</option>
        </select><br>
        <label for="immoprix">Montant total du projet:</label><br>
        <input type="number" class="line" name="prix" id="immoprix" value="" step="500"><br>
        <label for="immoapport">Montant total de votre apport:</label><br>
        <input type="number" class="line" name="apport" id="immoapport" value="" step="500"><br>
        <label for="immocredit">Montant du financement sollicité:</label><br>
        <input type="number" class="line" name="credit" id="immocredit" value="" step="500"><br>
        <label for="immocommentaire">Commentaires: <div id="compteimmo2"></div></label>
        <textarea name="commentaire" class="textarea" id="immocommentaire" rows="4" cols="80" maxlength="200"></textarea><br>
        <input type="submit" class="envoi" name="" value="ETAPE SUIVANTE">
      </form>
    </div>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/financeimmo.js"></script>
</html>
