<form class="formulaire" action="tt.php" method="post">
<!--
  <p class="bandeaufile">Assurances emprunteurs</p>
 -->




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
          <input type="number" class="line" name="dureerestante" id="dureerestante" value="">
          <label for="dureerestante">Durée restante en mois:</label>
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

          <div class="input-field">
            <select class="mrmme" id="civilité1" name="civilite">
              <option value="homme">M.</option>
              <option value="feme">Mme</option>
            </select>
            <label for="civilité1">Sexe:</label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="nom1" name="nom1" value="">
            <label for="nom1">Nom:</label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="prenom1" name="prenom2" value="">
            <label for="prenom1">Prénom:</label>
          </div>

          <div class="input-field">
            <!-- <input type="date" class="line" id="datenaissance1" name="datenaissance1" value="">
            <label for="datenaissance1">Date de naissance:</label> -->
            <input type="text" class="line datepicker" id="datenaissance1" name="datenaissance1" value="">
            <label for="datenaissance1">Date de naissance:</label>
          </div>

          <div class="input-field">
            <select class="mrmme" id="pays1" name="pays1">
              <option value="france">France</option>
              <option value="outremer">Outre Mer</option>
              <option value="autre">Autres</option>
            </select>
            <label for="pays1">Pays:</label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="postal1" name="postal1" value="">
            <label for="postal1">Code postal residence fiscale:</label>
          </div>

          <div class="input-field">
            <select class="mrmme" id="fumeur1" name="fumeur1">
              <option value="nonfumeur">Non fumeur</option>
              <option value="fumeur">Fumeur</option>
            </select>
            <label for="fumeur1">Vous etes:</label>
          </div>

          <div class="input-field">
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
            <label for="statutpro">Statut professionel</label>
          </div>

        </fieldset>




        <fieldset class="fieldform fieldassurer" id="assurer2">

          <div class="input-field">
            <select class="mrmme" id="civilité2" name="civilite">
              <option value="homme">M.</option>
              <option value="femme">Mme</option>
            </select>
            <label for="civilité2">Sexe:</label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="nom2" name="nom2" value="">
            <label for="nom2">Nom:</label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="prenom2" name="prenom2" value="">
            <label for="prenom2">Prénom:</label>
          </div>

          <div class="input-field">
            <!-- <input type="date" class="line" id="datenaissance2" name="datenaissance2" value="">
            <label for="datenaissance2">Date de naissance:</label> -->
            <input type="text" class="line datepicker" id="datenaissance2" name="datenaissance2" value="">
            <label for="datenaissance1">Date de naissance:</label>
          </div>

          <div class="input-field">
            <select class="mrmme" id="pays2" name="pays2">
              <option value="france">France</option>
              <option value="outremer">Outre Mer</option>
              <option value="autre">Autres</option>
            </select>
            <label for="pays2">Pays:</label>
          </div>

          <div class="input-field">
            <input type="text" class="line" id="postal2" name="postal2" value="">
            <label for="postal2">Code postal residence fiscale:</label>
          </div>

          <div class="input-field">
            <select class="mrmme" id="fumeur2" name="fumeur2">
              <option value="nonfumeur">Non fumeur</option>
              <option value="fumeur">Fumeur</option>
            </select>
            <label for="fumeur2">Vous etes:</label>
          </div>

          <div class="input-field">
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
            <label for="statutpro">Statut professionel</label>
          </div>


        </fieldset>

      </div> <!-- /infoassurer -->





    </div> <!-- /form part 1 -->





  <fieldset class="fieldform" id="formassupart3">

    <p class="bandeaufile">Coordonnées de la personne à contacter</p>

    <div class="input-field">
      <select class="mrmme" id="sexecontactassu" name="sexecontactassu">
        <option value="homme">Mr</option>
        <option value="femme">Mme</option>
      </select>
      <label for="sexecontactassu"></label>
    </div>

    <div class="input-field">
      <input type="text" class="line" id="nomcontactassu" name="nomcontactassu" value="">
      <label for="nomcontactassu">Nom:</label>
    </div>

    <div class="input-field">
      <input type="text" class="line" id="prenomcontactassu" name="prenomcontactassu" value="">
      <label for="prenomcontactassu">Prenom:</label>
    </div>

    <div class="input-field">
      <input type="text" class="line" id="societecontactassu" name="societecontactassu" value="">
      <label for="societecontactassu">Société:</label>
    </div>

    <div class="input-field">
      <input type="email" class="line" id="emailcontactassu" name="emailcontactassu" value="">
      <label for="emailcontactassu">E-mail:</label>
    </div>

    <div class="input-field">
      <input type="tel" class="line" id="portablecontactassu" name="portablecontactassu" value="">
      <label for="portablecontactassu">Portable:</label>
    </div>

    <div class="input-field">
      <input type="tel"  class="line" id="fixecontactassu" name="fixecontactassu" value="">
      <label for="fixecontactassu">Fixe:</label>
    </div>

  </fieldset>






  <fieldset id="formassupart2" class="fieldform">

    <p class="bandeaufile">Etat civile:</p>



    <div class="file-field input-field">
      <div class="btn">
        <span>Photocopie carte d'identité (au format .pdf)</span>
        <input type="file" class="file" id="assucni" name="cni" value="" accept=".pdf">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Votre fichier">
      </div>
    </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>Justificatif de domicile datant de moins de 3 mois</span>
        <input type="file" class="file" id="assuimpot" name="impot" value="" accept=".pdf">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Votre fichier">
      </div>
    </div>

    <p class="bandeaufile">Emprunt</p>

    <div class="file-field input-field">
      <div class="btn">
        <span>Contrat de prêt</span>
        <input type="file" class="file" id="assucontrat" name="assucontrat" value="" accept=".pdf">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Votre fichier">
      </div>
    </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>Dernier tableau d’amortissement à jour</span>
        <input type="file" class="file" id="assuammortissement" name="assuammortissement" value="">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Votre fichier">
      </div>
    </div>

    <p class="bandeaufile">Banque</p>

    <div class="file-field input-field">
      <div class="btn file-button">
        <span>IBAN du compte sur lequel seront prélevées les cotisations</span>
        <input type="file" class="file" id="assuiban" name="assuiban" value="">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate disabled" type="text" placeholder="Votre fichier">
      </div>
    </div>

  </fieldset>

  <a type="button" class="envoi btn-large" id="etapesuivanteassu" name="button">étape suivante</a>

  <button type="submit" class="envoi btn-large" id="finformassu" name="" value="Fin formulaire">Fin formulaire</button>

</form>
<div class="g-recaptcha" id="capassu" data-sitekey="6LchTWIUAAAAAJIQIi7cgdg_JBpmVA9FuQz07ed0"></div>

</div>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems, {
    yearRange: '150',
    maxYear: (new Date()).getFullYear(),
    firstDay: 1,
    format: 'dd/mm/yyyy',
    i18n: {
      cancel: ['Annuler'],
      months: [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin',
                'Juillet',
                'Août',
                'Septembre',
                'Octobre',
                'Novembre',
                'Decembre'
              ],
      monthsShort: [
                    'Jan',
                    'Fev',
                    'Mar',
                    'Avr',
                    'Mai',
                    'Juin',
                    'Juil',
                    'Aou',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec',
                  ],
      weekdays: [
                  'Dimanche',
                  'Lundi',
                  'Mardi',
                  'Mercredi',
                  'Jeudi',
                  'Vendredi',
                  'Samedi'
                ],
      weekdaysShort: [
                      'Dim',
                      'Lun',
                      'Mar',
                      'Mer',
                      'Jeu',
                      'Ven',
                      'Sam'
      ],
      weekdaysAbbrev: [
                        'D',
                        'L',
                        'M',
                        'M',
                        'J',
                        'V',
                        'S'
      ]
    }

  });
});
</script>
