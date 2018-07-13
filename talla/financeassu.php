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

        <fieldset class="fieldform">
          <label for="assuprojet">Type de financement:</label><br>
          <select class="mrmme" id="assuprojet" name="assuprojet">
            <option value="principale">Résidence principal</option>
            <option value="secondaire">Résidence secondaire</option>
            <option value="locative">Résidence locative</option>
            <option value="travaux">Travaux</option>
            <option value="consommation">Consommation</option>
            <option value="professionnel">Professionnel</option>
            <option value="autre">Auteurs</option>
          </select><br>
          <label for="nbcredit">Nombre de credit:</label><br>
          <select class="mrmme" id="nbcredit" name="nbcredit">
            <option value="1">1</option>
            <option value="2">2</option>
          </select><br>
          <label for="montantassurer">Montant à assurer:</label><br>
          <input type="number" class="line" name="montantassurer" id="montantassurer" value="" step="500"><br>
          <label for="dureerestante">Durée restante en mois:</label><br>
          <input type="number" class="line" name="dureerestante" id="dureerestante" value="" step="500"><br>
          <label for="periodicite">Périodicité des échéances:</label><br>
          <select class="mrmme" id="periodicite" name="periodicite">
            <option value="mensuelle">Mensuelle</option>
            <option value="trimestrielle">Trimestrielle</option>
            <option value="semestrielle">Semestrielle</option>
            <option value="annuelle">Annuelle</option>
          </select><br>
          <label for="nbassurer">Nombre d'emprunteurs à assurer:</label><br>
          <select class="mrmme" id="nbassurer" name="nbassurer">
            <option value="1">1</option>
            <option value="2">2</option>
          </select><br>
        </fieldset>

        <fieldset class="fieldform" id="assurer1">
          <label for="civilité1">Sexe:</label><br>
          <select class="mrmme" id="civilité1" name="civilite">
            <option value="homme">M.</option>
            <option value="feme">Mme</option>
          </select><br>
          <label for="nom1">Nom:</label><br>
          <input type="text" class="line" id="nom1" name="nom1" value=""><br>
          <label for="prenom1">Prénom:</label><br>
          <input type="text" class="line" id="prenom1" name="prenom2" value=""><br>
          <label for="datenaissance1">Date de naissance:</label><br>
          <input type="date" class="line" id="datenaissance1" name="datenaissance1" value=""><br>
          <label for="pays1">Pays:</label><br>
          <select class="mrmme" id="pays1" name="pays1">
            <option value="france">France</option>
            <option value="outremer">Outre Mer</option>
            <option value="autre">Autres</option>
          </select><br>
          <label for="postal1">Code postal residence fiscale:</label><br>
          <input type="text" class="line" id="postal1" name="postal1" value=""><br>
          <label for="fumeur1">Etes-vous:</label><br>
          <select class="mrmme" id="fumeur1" name="fumeur1">
            <option value="nonfumeur">Non fumeur</option>
            <option value="fumeur">Fumeur</option>
          </select><br>
          <label for="statutpro">Statut professionel</label><br>
          <select class="mrmme" id="statutpro1" name="statut1">
            <option value="agriculteur">Agriculteurs exploitants</option>
            <option value="artisan">Artisans/Commerçants</option>
            <option value="cadre">Cadres et professions intellectuelles supérieures</option>
            <option value="chef">Chefs d'entreprises</option>
            <option value="employe">Employe</option>
            <option value="ouvrier">Ouvrier</option>
            <option value="intermediaire">Professions intermédiaires</option>
            <option value="retraites">Retraités/Préretraités</option>
            <option value="autre">Autres personnes sans activités professionnelles</option>
          </select><br>
        </fieldset>

        <fieldset class="fieldform" id="assurer2">
          <label for="civilité2">Sexe:</label><br>
          <select class="mrmme" id="civilité2" name="civilite">
            <option value="homme">M.</option>
            <option value="feme">Mme</option>
          </select><br>
          <label for="nom2">Nom:</label><br>
          <input type="text" class="line" id="nom2" name="nom2" value=""><br>
          <label for="prenom2">Prénom:</label><br>
          <input type="text" class="line" id="prenom2" name="prenom2" value=""><br>
          <label for="datenaissance2">Date de naissance:</label><br>
          <input type="date" class="line" id="datenaissance2" name="datenaissance2" value=""><br>
          <label for="pays2">Pays:</label><br>
          <select class="mrmme" id="pays2" name="pays2">
            <option value="france">France</option>
            <option value="outremer">Outre Mer</option>
            <option value="autre">Autres</option>
          </select><br>
          <label for="postal2">Code postal residence fiscale:</label><br>
          <input type="text" class="line" id="postal2" name="postal2" value=""><br>
          <label for="fumeur2">Etes-vous:</label><br>
          <select class="mrmme" id="fumeur2" name="fumeur2">
            <option value="nonfumeur">Non fumeur</option>
            <option value="fumeur">Fumeur</option>
          </select><br>
          <label for="statutpro">Statut professionel</label><br>
          <select class="mrmme" id="statutpro2" name="statut2">
            <option value="agriculteur">Agriculteurs exploitants</option>
            <option value="artisan">Artisans/Commerçants</option>
            <option value="cadre">Cadres et professions intellectuelles supérieures</option>
            <option value="chef">Chefs d'entreprises</option>
            <option value="employe">Employe</option>
            <option value="ouvrier">Ouvrier</option>
            <option value="intermediaire">Professions intermédiaires</option>
            <option value="retraites">Retraités/Préretraités</option>
            <option value="autre">Autres personnes sans activités professionnelles</option>
          </select><br>
        </fieldset>

      </form>
    </div>
  </body>
</html>
