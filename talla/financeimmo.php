<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Financement Immobilier</title>*
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style-fixe.css">
    <link rel="stylesheet" href="./css/style-form.css">
  </head>
  <body>
    <div class="form-container">
      <form class="formulaire" action="index.html" method="post">
        <p class="bandeaufile">Financement immobilier</p>

        <fieldset class="fieldform">
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
          <label for="immofinancement">Montant du financement sollicité:</label><br>
          <input type="number" class="line" name="financement" id="immofinancement" value="" step="500"><br>
          <label for="immocommentaire">Commentaires: <div id="compteimmo2"></div></label>
          <textarea name="commentaire" class="textarea" id="immocommentaire" rows="4" cols="80" maxlength="200"></textarea><br>
        </fieldset>

        <fieldset class="fieldform">
          <p class="bandeaufile">Etat civile</p>
          <label for="immocni">Carte d'identité/Passeport/ou permis nouveau format, en cours de validité</label>
          <input type="file" class="file" id="immocni" name="immocni" value=""><br>
          <label for="immounion">Justificatif union (PACS, mariage...)</label>
          <input type="file" class="file" id="immounion" name="immounion" value=""><br>
          <label for="immodomicile">Justificatif de domicile datant de moins de 3 mois (facture box, électricité, gaz, eau, quittance de loyer)</label>
          <input type="file" class="file" id="immodomicile" name="immodomicile" value=""><br>

          <p class="bandeaufile">Revenus</p>
          <label for="immosalaire">3 derniers bulletins de salaire:</label>
          <input type="file" class="file" id="immosalaire" name="immosalaire" value=""><br>
          <label for="immocontart">Contrat de travail:</label>
          <input type="file" class="file" id="immocontart" name="immocontart" value=""><br>
          <label for="immorevenu">Autres revenus (loyers, pensions...):</label>
          <input type="file" class="file" id="immorevenu" name="immorevenu" value=""><br>
          <label for="immoavisimpot">2 derniers avis d'imposition + Déclaration des revenus de l’année N-1 (le cas échéant):</label>
          <input type="file" class="file" id="immoavisimpot" name="immoavisimpot" value=""><br>

          <p class="bandeaufile">Charges</p>
          <label for="immoloyer">Loyers payés</label>
          <input type="file" class="file" id="immoloyer" name="immoloyer" value=""><br>
          <label for="immocredit">Crédits en cours (contrat et tableau d'amortissement):</label>
          <input type="file" class="file" id="immocredit" name="immocredit" value=""><br>
          <label for="immopension">Pensions versées, aides financières...:</label>
          <input type="file" class="file" id="immopension" name="immopension" value=""><br>

          <p class="bandeaufile">Banques</p>
          <label for="immoreleve">3 derniers relevés bancaires de tous vos comptes courants:</label>
          <input type="file" class="file" id="immoreleve" name="immoreleve" value=""><br>
          <label for="immoepargne">Justificatif de vos épargnes (livrets, assurances-vie, épargne entreprise...):</label>
          <input type="file" class="file" id="immoepargne" name="immoepargne" value=""><br>

        </fieldset>


        </fieldset>

        <fieldset class="fieldform" id="formimmopart5">
          <p class="bandeaufile">Coordonnées de la personne à contacter</p>

          <label for="sexecontactimmo"></label>
          <select class="mrmme" id="sexecontactimmo" name="sexecontactimmo">
            <option value="homme">Mr</option>
            <option value="femme">Mme</option>
          </select><br>
          <label for="nomcontactimmo">Nom:</label><br>
          <input type="text" class="line" id="nomcontactimmo" name="nomcontactimmo" value=""><br>
          <label for="prenomcontactimmo">Prenom:</label><br>
          <input type="text" class="line" id="prenomcontactimmo" name="prenomcontactimmo" value=""><br>
          <label for="societecontactimmo">Société:</label><br>
          <input type="text" class="line" id="societecontactimmo" name="societecontactimmo" value=""><br>
          <label for="emailcontactimmo">E-mail:</label><br>
          <input type="email" class="line" id="emailcontactimmo" name="emailcontactimmo" value=""><br>
          <label for="portablecontactimmo">Portable:</label><br>
          <input type="tel" class="line" id="portablecontactimmo" name="portablecontactimmo" value=""><br>
          <label for="fixecontactimmo">Fixe:</label><br>
          <input type="tel"  class="line" id="fixecontactimmo" name="fixecontactimmo" value=""><br>

        </fieldset>

        <input type="submit" class="envoi" name="" value="ETAPE SUIVANTE">
      </form>
    </div>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/financeimmo.js"></script>
</html>
