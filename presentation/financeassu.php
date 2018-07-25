
    <link rel="stylesheet" href="./css/style-form.css">

    <div class="form-container">
      <form class="formulaire" action="tt.php" method="post">

        <p class="bandeaufile">Assurances emprunteurs</p>

          <div id="formassupart1">

            <fieldset class="fieldform">
              <div class="input-field">
                <select class="mrmme" id="assuprojet" name="assuprojet">
                  <option class="option" value="principale">Résidence principal</option>
                  <option class="option" value="secondaire">Résidence secondaire</option>
                  <option class="option" value="locative">Résidence locative</option>
                  <option class="option" value="travaux">Travaux</option>
                  <option class="option" value="consommation">Consommation</option>
                  <option class="option" value="professionnel">Professionnel</option>
                  <option class="option" value="autre">Auteurs</option>
                </select>
                <label>Type de financement:</label>
              </div>


              <div class="input-field">
                <select class="mrmme" id="nbcredit" name="nbcredit">
                  <option class="option" value="1">1</option>
                  <option class="option" value="2">2</option>
                </select>
                <label>Nombre de credit:</label>
              </div>

              <div class="input-field">
                <input type="number" class="line" name="montantassurer" id="montantassurer" value="" step="500">
                <label for="montantassurer">Montant à assurer:</label>
              </div>

              <div class="input-field">
                <label for="dureerestante">Durée restante en mois:</label>
                <input type="number" class="line" name="dureerestante" id="dureerestante" value="">
              </div>

              <div class="input-field">
                <select class="mrmme" id="periodicite" name="periodicite">
                  <option class="option" value="mensuelle">Mensuelle</option>
                  <option class="option" value="trimestrielle">Trimestrielle</option>
                  <option class="option" value="semestrielle">Semestrielle</option>
                  <option class="option" value="annuelle">Annuelle</option>
                </select>
                <label for="periodicite">Périodicité des échéances:</label>
              </div>

              <div class="input-field">
                <select class="mrmme" id="nbassurer" name="nbassurer">
                  <option class="option" value=""></option>
                  <option class="option" value="1">1</option>
                  <option class="option" value="2">2</option>
                </select>
                <label for="nbassurer">Nombre d'emprunteurs à assurer:</label>
              </div>

            </fieldset>



            <div class="infoassurer">

              <fieldset class="fieldform fieldassurer" id="assurer1">

                <label for="civilité1">Sexe:</label>
                <select class="mrmme" id="civilité1" name="civilite">
                  <option value="homme">M.</option>
                  <option value="feme">Mme</option>
                </select>

                <label for="nom1">Nom:</label>
                <input type="text" class="line" id="nom1" name="nom1" value="">

                <label for="prenom1">Prénom:</label>
                <input type="text" class="line" id="prenom1" name="prenom2" value="">

                <label for="datenaissance1">Date de naissance:</label>
                <input type="date" class="line" id="datenaissance1" name="datenaissance1" value="">

                <label for="pays1">Pays:</label>
                <select class="mrmme" id="pays1" name="pays1">
                  <option value="france">France</option>
                  <option value="outremer">Outre Mer</option>
                  <option value="autre">Autres</option>
                </select>

                <label for="postal1">Code postal residence fiscale:</label>
                <input type="text" class="line" id="postal1" name="postal1" value="">

                <label for="fumeur1">Vous etes:</label>
                <select class="mrmme" id="fumeur1" name="fumeur1">
                  <option value="nonfumeur">Non fumeur</option>
                  <option value="fumeur">Fumeur</option>
                </select>

                <label for="statutpro">Statut professionel</label>
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
                </select>

              </fieldset>




              <fieldset class="fieldform fieldassurer" id="assurer2">
                <label for="civilité2">Sexe:</label>
                <select class="mrmme" id="civilité2" name="civilite">
                  <option value="homme">M.</option>
                  <option value="femme">Mme</option>
                </select>

                <label for="nom2">Nom:</label>
                <input type="text" class="line" id="nom2" name="nom2" value="">

                <label for="prenom2">Prénom:</label>
                <input type="text" class="line" id="prenom2" name="prenom2" value="">

                <label for="datenaissance2">Date de naissance:</label>
                <input type="date" class="line" id="datenaissance2" name="datenaissance2" value="">

                <label for="pays2">Pays:</label>
                <select class="mrmme" id="pays2" name="pays2">
                  <option value="france">France</option>
                  <option value="outremer">Outre Mer</option>
                  <option value="autre">Autres</option>
                </select>

                <label for="postal2">Code postal residence fiscale:</label>
                <input type="text" class="line" id="postal2" name="postal2" value="">

                <label for="fumeur2">Vous etes:</label>
                <select class="mrmme" id="fumeur2" name="fumeur2">
                  <option value="nonfumeur">Non fumeur</option>
                  <option value="fumeur">Fumeur</option>
                </select>

                <label for="statutpro">Statut professionel</label>
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
                </select>


              </fieldset>
            </div>
          </div>


        <fieldset class="fieldform" id="formassupart3">

          <p class="bandeaufile">Coordonnées de la personne à contacter</p>

          <label for="sexecontactassu"></label>
          <select class="mrmme" id="sexecontactassu" name="sexecontactassu">
            <option value="homme">Mr</option>
            <option value="femme">Mme</option>
          </select>

          <label for="nomcontactassu">Nom:</label>
          <input type="text" class="line" id="nomcontactassu" name="nomcontactassu" value="">

          <label for="prenomcontactassu">Prenom:</label>
          <input type="text" class="line" id="prenomcontactassu" name="prenomcontactassu" value="">

          <label for="societecontactassu">Société:</label>
          <input type="text" class="line" id="societecontactassu" name="societecontactassu" value="">

          <label for="emailcontactassu">E-mail:</label>
          <input type="email" class="line" id="emailcontactassu" name="emailcontactassu" value="">

          <label for="portablecontactassu">Portable:</label>
          <input type="tel" class="line" id="portablecontactassu" name="portablecontactassu" value="">

          <label for="fixecontactassu">Fixe:</label>
          <input type="tel"  class="line" id="fixecontactassu" name="fixecontactassu" value="">

        </fieldset>



        <fieldset id="formassupart2" class="fieldform">

          <p class="bandeaufile">Etat civile:</p>

          <label for="assucni">Photocopie carte d'identité (au format .pdf):</label>
          <input type="file" class="file" id="assucni" name="cni" value="" accept=".pdf">

          <label for="assuimpot">Justificatif de domicile datant de moins de 3 mois:</label>
          <input type="file" class="file" id="assuimpot" name="impot" value="" accept=".pdf">

          <p class="bandeaufile">Emprunt</p>

          <label for="assucontrat">Contrat de prêt:</label>
          <input type="file" class="file" id="assucontrat" name="assucontrat" value="" accept=".pdf">

          <label for="assuammortissement">Dernier tableau d’amortissement à jour:</label>
          <input type="file" class="file" id="assuammortissement" name="assuammortissement" value="">

          <p class="bandeaufile">Banque</p>

          <label for="assuiban">IBAN du compte sur lequel seront prélevées les cotisations:</label>
          <input type="file" class="file" id="assuiban" name="assuiban" value="">

        </fieldset>



        <button type="button" class="envoi" id="etapesuivanteassu" name="button">Etape suivante</button>

        <input type="submit" class="envoi" id="finformassu" name="" value="Fin formulaire">

      </form>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/financeassu.js"></script>
