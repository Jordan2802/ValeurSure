<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>financement pro</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-fixe.css">
    <link rel="stylesheet" href="./css/style-form.css">
  </head>
  <body>
    <div class="form-container">
      <form class="formulaire" action="index.html" method="post">
        <label for="proprojet">Objet du financement</label><br>
        <select class="mrmme" id="proprojet" name="proprojet">
          <option value="activite">Création d'activité</option>
          <option value="reprise">Reprise d'activité</option>
          <option value="developpement">Développement d'activité</option>
          <option value="achatcommerce">Achat de fond de commerce</option>
          <option value="achatmur">Achat de murs professionnels</option>
          <option value="achatterrain">Achat de terrain et/ou construction</option>
          <option value="achatmatos">Achat de matériel/machine/outil</option>
          <option value="achatvehicule">Achat de véhicule</option>
        </select><br>
        <label for="prodescription">Description du projet: <div id="comptepro1"></div></label>
        <textarea name="description" class="textarea" id="prodescription" rows="4" cols="80" maxlength="100" noresize></textarea><br>
        <label for="propostal">Code postal:</label><br>
        <input type="text" class="line" id="propostal" name="postal" value=""><br>
        <label for="proville">Ville:</label><br>
        <input type="text" class="line" id="proville" name="ville" value=""><br>
        <label for="proavancement">Etat d'avancement</label><br>
        <select class="mrmme" id="proavancement" name="">
          <option value="reflexion">En reflexion</option>
          <option value="redaction">Rédaction d'un Business Plan</option>
          <option value="constitution">Constitution de l'entreprise</option>
          <option value="recherche">Recherche de financement</option>
          <option value="signature">Signature compromis/promesse d'achat</option>
          <option value="enattente">En attente d'une proposition banque ou courtier</option>
        </select><br>
        <label for="proprix">Montant du produit:</label><br>
        <input type="number" class="line" id="proprix" name="prix" value="" step="500"><br>
        <label for="proapport">Montant totale de votre apport:</label><br>
        <input type="number" class="line" id="proapport" name="apport" value="" step="500"><br>
        <label for="procredit">Montant du financement sollicité:</label><br>
        <input type="number" class="line" id="procredit" name="credit" value=""><br>
        <label for="procommentaire">Commentaires: <div id="comptepro2"></div></label>
        <textarea name="commentaire" class="textarea" id="procommentaire" rows="4" cols="80" maxlength="200"></textarea><br>
        <input type="submit" class="envoi" name="" value="ETAPE SUIVANTE">
      </form>
    </div>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/financepro.js"></script>
</html>
