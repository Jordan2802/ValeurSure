<form class="formulaire" id="formulaire1" action="formfinance2.php" method="post">
  <br>
  <div class="input-field">

    <select id="sexe" class="mrmme">
      <option class="option" value="homme">Homme</option>
      <option class="option" value="femme">Femme</option>
    </select>
    <label>Civilité: </label>

  </div>
  <div class="input-field">
    <input type="text" name="nom" class="line" id="nom" value="" required>
    <label for="nom">Nom: </label>
  </div>
  <div class="input-field">
    <input type="text" name="prenom" class="line" id="prenom" value="" required>
    <label for="prenom">Prenom: </label>
  </div>
  <div class="input-field">
    <input type="text" id="tel" name="tel" class="line" value="" required>
    <label for="tel">Téléphone: </label>
  </div>
  <div class="input-field">
    <input type="text" id="adresse" name="adresse" class="line" value="" required>
    <label for="adresse">Adresse: </label>
  </div>

  <div id="zipbox"class="control-group">
    <div class="input-field">
      <input type="text" id="postal" name="postal" class="line" value="" maxlength="5" required>
      <label for="postal">Code postal: </label>
    </div>
  </div>
  <div class="control-group">
    <div class="input-field">
      <input type="text" id="city" name="city" class="line" value="" required>
      <label for="city">Ville: </label>
    </div>

<button class="large-btn waves-effect waves-light envoi z-depth-2" type="submit" name="action">ÊTAPE SUIVANTE
</button>


<div class="g-recaptcha" data-sitekey="6LchTWIUAAAAAJIQIi7cgdg_JBpmVA9FuQz07ed0"></div>
</div>

</form>
