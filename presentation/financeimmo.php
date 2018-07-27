
      <form class="formulaire" action="index.html" method="post">

        <p class="bandeaufile">Financement immobilier</p>

        <fieldset class="fieldform" id="formimmopart1">
          <div class="row">
            <div class="input-field">
              <select class="mrmme" name="immoprojet" id="immoprojet">
                <option value="principal">Résidence principale</option>
                <option value="secondaire">Résidence secondaire</option>
                <option value="locative">Résidence locative</option>
                <option value="travaux">Travaux</option>
                <option value="renegociation">Renégociation de prêt</option>
              </select>
              <label>Objet du financement:</label>
            </div>
          </div>
          <div class="input-field">
            <textarea name="descriptionimmo" class="textarea" id="immodescription" rows="4" cols="80" maxlength="100" ></textarea>
            <label for="immodescription">Description: <div id="compteimmo1"></div></label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="immopostal" name="postal" value="">
            <label for="immopostal">Code postal:</label>
          </div>
          <div class="input-field">
            <input type="text" class="line" id="immoville" name="ville" value="">
            <label for="immoville">Ville:</label>
          </div>
          <div class="row">
            <div class="input-field">
              <select class="mrmme" id="proavancement" name="">
                <option value="reflexion">En reflexion</option>
                <option value="etude">Etude du budget</option>
                <option value="recherche">Recherche de financement</option>
                <option value="signature">Signature compromis</option>
                <option value="attente">En attente proposition banque ou courtier</option>
              </select>
              <label for="immoavancement">Etat d'avancement:</label>
            </div>
          </div>
          <div class="input-field">
            <label for="immoprix">Montant total du projet:</label>
            <input type="number" class="line" name="prix" id="immoprix" value="" step="500">
          </div>
          <div class="input-field">
            <label for="immoapport">Montant total de votre apport:</label>
            <input type="number" class="line" name="apport" id="immoapport" value="" step="500">
          </div>
          <div class="input-field">
            <label for="immofinancement">Montant du financement sollicité:</label>
            <input type="number" class="line" name="financement" id="immofinancement" value="" step="500">
          </div>
          <div class="input-field">
            <label for="immocommentaire">Commentaires: <div id="compteimmo2"></div></label>
            <textarea name="commentaire" class="textarea" id="immocommentaire" rows="4" cols="80" maxlength="200"></textarea>
          </div>

        </fieldset>

        <fieldset class="fieldform" id="formimmopart2">
          <p class="bandeaufile">Etat civile</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Carte d'identité/Passeport/ou permis nouveau format, en cours de validité</span>
              <input type="file" class="file" id="immocni" name="immocni" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Justificatif union (PACS, mariage...)</span>
              <input type="file" class="file" id="immounion" name="immounion" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Justificatif de domicile datant de moins de 3 mois (facture box, électricité, gaz, eau, quittance de loyer)</span>
              <input type="file" class="file" id="immodomicile" name="immodomicile" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Revenus</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>3 derniers bulletins de salaire:</span>
              <input type="file" class="file" id="immosalaire" name="immosalaire" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Contrat de travail:</span>
              <input type="file" class="file" id="immocontart" name="immocontart" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Autres revenus (loyers, pensions...):</span>
              <input type="file" class="file" id="immorevenu" name="immorevenu" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>2 derniers avis d'imposition + Déclaration des revenus de l’année N-1 (le cas échéant):</span>
              <input type="file" class="file" id="immoavisimpot" name="immoavisimpot" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>


          <p class="bandeaufile">Charges</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Loyers payés:</span>
              <input type="file" class="file" id="immoloyer" name="immoloyer" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Crédits en cours (contrat et tableau d'amortissement):</span>
              <input type="file" class="file" id="immocredit" name="immocredit" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Pensions versées, aides financières...:</span>
              <input type="file" class="file" id="immopension" name="immopension" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>


          <p class="bandeaufile">Banques</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>3 derniers relevés bancaires de tous vos comptes courants:</span>
              <input type="file" class="file" id="immoreleve" name="immoreleve" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Justificatif de vos épargnes (livrets, assurances-vie, épargne entreprise...):</span>
              <input type="file" class="file" id="immoepargne" name="immoepargne" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </fieldset>


        </fieldset>

        <fieldset class="fieldform" id="formimmopart3">
          <p class="bandeaufile">Coordonnées de la personne à contacter</p>

           <div class="input-field">
            <label for="sexecontactimmo"></label>
            <select class="mrmme" id="sexecontactimmo" name="sexecontactimmo">
              <option value="homme">Mr</option>
              <option value="femme">Mme</option>
            </select>
          </div>
          <div class="input-field">
            <label for="nomcontactimmo">Nom:</label>
            <input type="text" class="line" id="nomcontactimmo" name="nomcontactimmo" value="">
          </div>
          <div class="input-field">
            <label for="prenomcontactimmo">Prenom:</label>
            <input type="text" class="line" id="prenomcontactimmo" name="prenomcontactimmo" value="">
          </div>
          <div class="input-field">
            <label for="societecontactimmo">Société:</label>
            <input type="text" class="line" id="societecontactimmo" name="societecontactimmo" value="">
          </div>
          <div class="input-field">
            <label for="emailcontactimmo">E-mail:</label>
            <input type="email" class="line" id="emailcontactimmo" name="emailcontactimmo" value="">
          </div>
          <div class="input-field">
            <label for="portablecontactimmo">Portable:</label>
            <input type="tel" class="line" id="portablecontactimmo" name="portablecontactimmo" value="">
          </div>
          <div class="input-field">
            <label for="fixecontactimmo">Fixe:</label>
            <input type="tel"  class="line" id="fixecontactimmo" name="fixecontactimmo" value="">
          </div>
        </fieldset>

        <button type="button" class="envoi" id="etapesuivanteimmo" name="button">Etape suivante</button>
        <input type="submit" class="envoi" id="finformimmo" name="" value="FIN FORMULAIRE">

      </form>
