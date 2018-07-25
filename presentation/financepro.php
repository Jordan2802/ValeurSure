    <link rel="stylesheet" href="./css/style-form.css">
    <div class="form-container">
      <form class="formulaire" action="index.html" method="post">
        <p class="bandeaufile">Financement professionnel</p>

        <fieldset class="fieldform" id="formpropart1">
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
          <label for="profinancement">Montant du financement sollicité:</label><br>
          <input type="number" class="line" id="profinancement" name="financement" value=""><br>
          <label for="procommentaire">Commentaires: <div id="comptepro2"></div></label>
          <textarea name="commentaire" class="textarea" id="procommentaire" rows="4" cols="80" maxlength="200"></textarea><br>
        </fieldset>

        <fieldset class="fieldform" id="formpropart2">
          <p class="bandeaufile">Etat civile</p>
          <label for="">Carte d'identité/Passeport/ou permis nouveau format, en cours de validité</label>
          <input type="file" class="file" id="procni" name="procni" value=""><br>
          <label for="">Justificatif union (PACS, mariage...)</label>
          <input type="file" class="file" id="prounion" name="prounion" value=""><br>
          <label for="">Justificatif de domicile datant de moins de 3 mois (facture box, électricité, gaz, eau, quittance de loyer)</label>
          <input type="file" class="file" id="prodomicile" name="" value=""><br>
          <p class="bandeaufile">Revenus</p>
          <label for="proavisimpot">2 derniers avis d'imposition + Déclaration des revenus de l’année N-1 (le cas échéant):</label>
          <input type="file" class="file" id="proavisimpot" name="proavisimpot" value=""><br>
          <label for="prorevenu">Autres revenus (loyers, pensions...):</label>
          <input type="file" class="file" id="prorevenu" name="prorevenu" value=""><br>
          <p class="bandeaufile">Charges</p>
          <label for="proloyer">Loyers payés</label>
          <input type="file" class="file" id="proloyer" name="proloyer" value=""><br>
          <label for="procredit">Crédits en cours (contrat et tableau d'amortissement):</label>
          <input type="file" class="file" id="procredit" name="procredit" value=""><br>
          <label for="propension">Pensions versées, aides financières...:</label>
          <input type="file" class="file" id="propension" name="propension" value=""><br>
          <p class="bandeaufile">Banques</p>
          <label for="proreleve">3 derniers relevés bancaires de tous vos comptes courants:</label>
          <input type="file" class="file" id="proreleve" name="proreleve" value=""><br>
          <label for="proepargne">Justificatif de vos épargnes (livrets, assurances-vie, épargne entreprise...):</label>
          <input type="file" class="file" id="proepargne" name="proepargne" value=""><br>
        </fieldset>

        <fieldset class="fieldform" id="formpropart3">
          <p class="bandeaufile">Pour société existante</p>
          <p class="bandeaufile">Identité</p>
          <label for="prokbis">K-Bis de moins de 3 mois:</label>
          <input type="file" class="file" id="prokbis" name="prokbis" value=""><br>
          <label for="prostatuts">Statuts:</label>
          <input type="file" class="file" id="prostatuts" name="prostatuts" value=""><br>
          <label for="propvgerant">Procès Verbal de nomination Gérant s’il n’est pas présent dans les statuts:</label>
          <input type="file" class="file" id="propvgerant" name="propvgerant" value=""><br>

          <p class="bandeaufile">Comptabilité</p>
          <label for="prolastbilan">3 derniers bilans:</label>
          <input type="file" class="file" id="prolastbilan" name="prolastbilan" value=""><br>
          <label for="proarretecomptable">Arrêté comptable lorsque la clôture de l’exercice précédent est supérieure à 6 mois:</label>
          <input type="file" class="file" id="proarretecomptable" name="proarretecomptable" value=""><br>
          <label for="proprevisionnel">Prévisionnel lorsque l’investissement contribue à générer du Chiffre d’Affaires ou des charges supplémentaires:</label>
          <input type="file" class="file" id="proprevisionnel" name="proprevisionnel" value=""><br>

          <p class="bandeaufile">Banque</p>
          <label for="proreleve">3 derniers relevés de comptes bancaires:</label>
          <input type="file" class="file" id="proreleve" name="proreleve" value=""><br>

          <p class="bandeaufile">Charges</p>
          <label for="probail">Copie bail:</label>
          <input type="file" class="file" id="probail" name="probail" value=""><br>
          <label for="propret">Contrats des prêts et tableau d’amortissement:</label>
          <input type="file" class="file" id="propret" name="propret" value=""><br>
          <label for="procreditbail">Contrat crédit-bail:</label>
          <input type="file" class="file" id="procreditbail" name="procreditbail" value="">

          <p class="bandeaufile">Projet</p>
          <label for="">Devis:</label>
          <input type="file" class="file" id="prodevis" name="" value=""><br>
          <label for="">Promesse d’achat ou compromis:</label>
          <input type="file" class="file" id="proexistantpromesse" name="" value=""><br>
          <label for="">Business Plan (le cas échéant):</label>
          <input type="file" class="file" id="proexistantbusinessplan" name="" value=""><br>

        </fieldset>

        <fieldset class="fieldform" id="formpropart4">

          <p class="bandeaufile">Pour société en formation</p>
          <p class="bandeaufile">Identité</p>
          <label for="proprojetstatut">Projet de Statuts:</label>
          <input type="file" class="file" id="proprojetstatut" name="proprojetstatut" value=""><br>
          <label for="proprojetpvgerant">Procès Verbal de nomination Gérant s’il n’est pas présent dans les statuts:</label>
          <input type="file" class="file" id="proprojetpvgerant" name="proprojetpvgerant" value=""><br>

          <p class="bandeaufile">Comptabilité</p>
          <label for="proprojetprevisionnel">Prévisionnel:</label>
          <input type="file" class="file" id="proprojetprevisionnel" name="proprojetprevisionnel" value=""><br>

          <p class="bandeaufile">Projet</p>
          <label for="proprojetbusiness">Business Plan:</label>
          <input type="file" class="file" id="proprojetbusiness" name="proprojetbusiness" value=""><br>
          <label for="proprojetfactures">Factures:</label>
          <input type="file" class="file" id="proprojetfactures" name="proprojetfactures" value=""><br>
          <label for="proprojetbail">Projet de bail:</label>
          <input type="file" class="file" id="proprojetbail" name="proprojetbail" value=""><br>
          <label for="proprojetachat">Promesse d’achat:</label>
          <input type="file" class="file" id="proprojetachat" name="proprojetachat" value=""><br>

        </fieldset>

        <fieldset class="fieldform" id="formpropart5">
          <p class="bandeaufile">Coordonnées de la personne à contacter</p>

          <label for="sexecontactpro"></label>
          <select class="mrmme" id="sexecontactpro" name="sexecontactpro">
            <option value="homme">Mr</option>
            <option value="femme">Mme</option>
          </select><br>
          <label for="nomcontactpro">Nom:</label><br>
          <input type="text" class="line" id="nomcontactpro" name="nomcontactpro" value=""><br>
          <label for="prenomcontactpro">Prenom:</label><br>
          <input type="text" class="line" id="prenomcontactpro" name="prenomcontactpro" value=""><br>
          <label for="societecontactpro">Société:</label><br>
          <input type="text" class="line" id="societecontactpro" name="societecontactpro" value=""><br>
          <label for="emailcontactpro">E-mail:</label><br>
          <input type="email" class="line" id="emailcontactpro" name="emailcontactpro" value=""><br>
          <label for="portablecontactpro">Portable:</label><br>
          <input type="tel" class="line" id="portablecontactpro" name="portablecontactpro" value=""><br>
          <label for="fixecontactpro">Fixe:</label><br>
          <input type="tel"  class="line" id="fixecontactpro" name="fixecontactpro" value=""><br>

        </fieldset>

        <button type="button" class="envoi" id="etapesuivante" name="button">Etape suivante</button><br>
        <input type="submit" class="envoi" id="finform" name="" value="Fin formulaire">

      </form>
    </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/financepro.js"></script>
