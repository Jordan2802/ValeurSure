      <form class="formulaire" id="formpresta" action="index.html" method="post">

        <p class="bandeaufile">Prestations de services</p>

        <fieldset class="fieldform" id="formprestapart1">

          <div class="row">
            <div class="input-field">
              <select class="mrmme" id="typepresta" name="typepresta">
                <option value="conference">Conférence</option>
                <option value="intervention">Intervention pédagogique</option>
                <option value="conseil">Conseil</option>
              </select>
              <label for="typepresta">Type de prestation</label>
            </div>
          </div>
          <div class="input-field">
            <label for="prestaobjet">Objet:</label>
            <textarea name="prestaobjet" class="materialize-textarea" id="prestaobjet" rows="4" cols="80" data-length="100"></textarea>
          </div>
          <div class="row">
            <div class="input-field">
              <select class="mrmme" id="prestaobjet" name="prestaobjet">
                <option value="entrepreneur">Entrepreneur</option>
                <option value="createur">Créateurs d'entreprise</option>
                <option value="salaries">Salariés</option>
                <option value="etudiants">Etudiants</option>
              </select>
              <label for="prestaobjet">Public:</label>
            </div>
          </div>
          <div class="input-field">
            <label for="prestaduree">Durée:</label>
            <textarea name="prestaduree" class="materialize-textarea" id="prestaduree" rows="8" cols="80" data-length="60"></textarea>
          </div>
          <div class="input-field">
            <label for="prestalieu">Lieu:</label>
            <textarea name="prestalieu" class="materialize-textarea" id="prestalieu" rows="8" cols="80" data-length="60"></textarea>
          </div>
        </fieldset>

        <fieldset class="fieldform" id="formprestapart2">
          <p class="bandeaufile">Coordonnées de la personne à contacter</p>
          <div class="row">
            <div class="input-field">
              <select class="mrmme" id="sexecontactpresta" name="sexecontactpresta">
                <option value="homme">Mr</option>
                <option value="femme">Mme</option>
              </select>
              <label for="sexecontactpresta"></label>
            </div>
          </div>
          <div class="input-field">
            <label for="nomcontactpresta">Nom:</label>
            <input type="text" class="line" id="nomcontactpresta" name="nomcontactpresta" value="">
          </div>
          <div class="input-field">
            <label for="prenomcontactpresta">Prenom:</label>
            <input type="text" class="line" id="prenomcontactpresta" name="prenomcontactpresta" value="">
          </div>
          <div class="input-field">
            <label for="societecontactpresta">Société:</label>
            <input type="text" class="line" id="societecontactpresta" name="societecontactpresta" value="">
          </div>
          <div class="input-field">
            <label for="emailcontactpresta">E-mail:</label>
            <input type="email" class="line" id="emailcontactpresta" name="emailcontactpresta" value="">
          </div>
          <div class="input-field">
            <label for="portablecontactpresta">Portable:</label>
            <input type="tel" class="line" id="portablecontactpresta" name="portablecontactpresta" value="">
          </div>
          <div class="input-field">
            <label for="fixecontactpresta">Fixe:</label>
            <input type="tel"  class="line" id="fixecontactpresta" name="fixecontactpresta" value="">
          </div>
        </fieldset>

        <a type="button" class="envoi btn-large" id="etapesuivantepresta" name="button">étape suivante</a>

        <!-- <button type="submit" class="envoi btn-large" id="finformpresta" name="" value="Fin formulaire">Fin formulaire</button> -->
        <button class="btn waves-effect waves-light" id="finformpresta" type="submit" name="action">Fin formulaire
          <i class="material-icons right">send</i>
        </button>

      </form>
      <div class="g-recaptcha" id="cappresta" data-sitekey="6LchTWIUAAAAAJIQIi7cgdg_JBpmVA9FuQz07ed0"></div>
