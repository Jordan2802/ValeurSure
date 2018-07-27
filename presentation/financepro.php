      <form class="formulaire" action="index.html" method="post">
        <p class="bandeaufile">Financement professionnel</p>

        <fieldset class="fieldform" id="formpropart1">


            <div class="input-field">
              <select class="mrmme" id="proprojet" name="proprojet">
                <option class="option" value="activite">Création d'activité</option>
                <option class="option" value="reprise">Reprise d'activité</option>
                <option class="option" value="developpement">Développement d'activité</option>
                <option class="option" value="achatcommerce">Achat de fond de commerce</option>
                <option class="option" value="achatmur">Achat de murs professionnels</option>
                <option class="option" value="achatterrain">Achat de terrain et/ou construction</option>
                <option class="option" value="achatmatos">Achat de matériel/machine/outil</option>
                <option class="option" value="achatvehicule">Achat de véhicule</option>
              </select>
              <label for="proprojet">Objet du financement</label>
            </div>


          <div class="input-field">
            <textarea name="description" class="textarea" id="prodescription" maxlength="100" ></textarea>
            <label for="prodescription">Description du projet: <div id="comptepro1"></div></label>
          </div>

          <div class="input-field">
            <label for="propostal">Code postal:</label>
            <input type="text" class="line" id="propostal" name="postal" value="">
          </div>
          <div class="input-field">
            <label for="proville">Ville:</label>
            <input type="text" class="line" id="proville" name="ville" value="">
          </div>
          <div class="row">
            <div class="input-field">
              <select class="mrmme" id="proavancement" name="">
                <option value="reflexion">En reflexion</option>
                <option value="redaction">Rédaction d'un Business Plan</option>
                <option value="constitution">Constitution de l'entreprise</option>
                <option value="recherche">Recherche de financement</option>
                <option value="signature">Signature compromis/promesse d'achat</option>
                <option value="enattente">En attente d'une proposition banque ou courtier</option>
              </select>
              <label for="proavancement">Etat d'avancement</label>
            </div>
          </div>

          <div class="input-field">
            <label for="proprix">Montant du produit:</label>
            <input type="number" class="line" id="proprix" name="prix" value="" step="500">
          </div>
          <div class="input-field">
            <label for="proapport">Montant totale de votre apport:</label>
            <input type="number" class="line" id="proapport" name="apport" value="" step="500">
          </div>
          <div class="input-field">
            <label for="profinancement">Montant du financement sollicité:</label>
            <input type="number" class="line" id="profinancement" name="financement" value="">
          </div>
          <div class="input-field">
            <label for="procommentaire">Commentaires: <div id="comptepro2"></div></label>
            <textarea name="commentaire" class="textarea" id="procommentaire" rows="4" cols="80" maxlength="200"></textarea>
          </div>
        </fieldset>

        <fieldset class="fieldform" id="formpropart2">

          <p class="bandeaufile">Etat civile</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Carte d'identité/Passeport/ou permis nouveau format, en cours de validité</span>
              <input type="file" class="file" id="procni" name="procni" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Justificatif union (PACS, mariage...)</span>
              <input type="file" class="file" id="prounion" name="prounion" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Justificatif de domicile datant de moins de 3 mois (facture box, électricité, gaz, eau, quittance de loyer)</span>
              <input type="file" class="file" id="prodomicile" name="" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Revenus</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>2 derniers avis d'imposition + Déclaration des revenus de l’année N-1 (le cas échéant):</span>
              <input type="file" class="file" id="proavisimpot" name="proavisimpot" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Autres revenus (loyers, pensions...):</span>
              <input type="file" class="file" id="prorevenu" name="prorevenu" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>


          <p class="bandeaufile">Charges</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Loyers payés:</span>
              <input type="file" class="file" id="proloyer" name="proloyer" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Crédits en cours (contrat et tableau d'amortissement):</span>
              <input type="file" class="file" id="procredit" name="procredit" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Pensions versées, aides financières...:</span>
              <input type="file" class="file" id="propension" name="propension" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Banques</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>3 derniers relevés bancaires de tous vos comptes courants:</span>
              <input type="file" class="file" id="proreleve" name="proreleve" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Justificatif de vos épargnes (livrets, assurances-vie, épargne entreprise...):</span>
              <input type="file" class="file" id="proepargne" name="proepargne" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </fieldset>

        <fieldset class="fieldform" id="formpropart3">

          <p class="bandeaufile">Pour société existante</p>

          <p class="bandeaufile">Identité</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>K-Bis de moins de 3 mois:</span>
              <input type="file" class="file" id="prokbis" name="prokbis" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Statuts:</span>
              <input type="file" class="file" id="prostatuts" name="prostatuts" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Procès Verbal de nomination Gérant s’il n’est pas présent dans les statuts:</span>
              <input type="file" class="file" id="propvgerant" name="propvgerant" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Comptabilité</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>3 derniers bilans:</span>
              <input type="file" class="file" id="prolastbilan" name="prolastbilan" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Arrêté comptable lorsque la clôture de l’exercice précédent est supérieure à 6 mois:</span>
              <input type="file" class="file" id="proarretecomptable" name="proarretecomptable" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Prévisionnel lorsque l’investissement contribue à générer du Chiffre d’Affaires ou des charges supplémentaires:</span>
              <input type="file" class="file" id="proprevisionnel" name="proprevisionnel" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Banque</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>3 derniers relevés de comptes bancaires:</span>
              <input type="file" class="file" id="proreleve" name="proreleve" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>


          <p class="bandeaufile">Charges</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Copie bail:</span>
              <input type="file" class="file" id="probail" name="probail" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Contrats des prêts et tableau d’amortissement:</span>
              <input type="file" class="file" id="propret" name="propret" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Contrat crédit-bail:</span>
              <input type="file" class="file" id="procreditbail" name="procreditbail" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Projet</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Devis:</span>
              <input type="file" class="file" id="prodevis" name="" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Promesse d’achat ou compromis:</span>
              <input type="file" class="file" id="proexistantpromesse" name="" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Business Plan (le cas échéant):</span>
              <input type="file" class="file" id="proexistantbusinessplan" name="" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

        </fieldset>

        <fieldset class="fieldform" id="formpropart4">

          <p class="bandeaufile">Pour société en formation</p>

          <p class="bandeaufile">Identité</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Projet de Statuts:</span>
              <input type="file" class="file" id="proprojetstatut" name="proprojetstatut" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Comptabilité</span>
              <input type="file" class="file" id="proprojetpvgerant" name="proprojetpvgerant" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Comptabilité</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Prévisionnel:</span>
              <input type="file" class="file" id="proprojetprevisionnel" name="proprojetprevisionnel" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <p class="bandeaufile">Projet</p>

          <div class="file-field input-field">
            <div class="btn">
              <span>Business Plan:</span>
              <input type="file" class="file" id="proprojetbusiness" name="proprojetbusiness" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Factures:</span>
              <input type="file" class="file" id="proprojetfactures" name="proprojetfactures" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Projet de bail:</span>
              <input type="file" class="file" id="proprojetbail" name="proprojetbail" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="file-field input-field">
            <div class="btn">
              <span>Promesse d’achat:</span>
              <input type="file" class="file" id="proprojetachat" name="proprojetachat" value="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </fieldset>

        <fieldset class="fieldform" id="formpropart5">
          <p class="bandeaufile">Coordonnées de la personne à contacter</p>
          <div class="row">
            <div class="input-field">
              <select class="mrmme" id="sexecontactpro" name="sexecontactpro">
                <option value="homme">Mr</option>
                <option value="femme">Mme</option>
              </select>
              <label for="sexecontactpro"></label>
            </div>
          </div>
          <div class="input-field">
            <label for="nomcontactpro">Nom:</label>
            <input type="text" class="line" id="nomcontactpro" name="nomcontactpro" value="">
          </div>
          <div class="input-field">
            <label for="prenomcontactpro">Prenom:</label>
            <input type="text" class="line" id="prenomcontactpro" name="prenomcontactpro" value="">
          </div>
          <div class="input-field">
            <label for="societecontactpro">Société:</label>
            <input type="text" class="line" id="societecontactpro" name="societecontactpro" value="">
          </div>
          <div class="input-field">
            <label for="emailcontactpro">E-mail:</label>
            <input type="email" class="line" id="emailcontactpro" name="emailcontactpro" value="">
          </div>
          <div class="input-field">
            <label for="portablecontactpro">Portable:</label>
            <input type="tel" class="line" id="portablecontactpro" name="portablecontactpro" value="">
          </div>
          <div class="input-field">
            <label for="fixecontactpro">Fixe:</label>
            <input type="tel"  class="line" id="fixecontactpro" name="fixecontactpro" value="">
          </div>
        </fieldset>

        <button type="button" class="envoi" id="etapesuivante" name="button">Etape suivante</button>
        <input type="submit" class="envoi" id="finform" name="" value="Fin formulaire">

      </form>
