<div class="tel" id="tel">
  <div class="fas fa-mobile-alt" onclick="slideTel()"></div>
  <div class="text cache" id="tel"><span id="valeur--coor">Coordonnées ValeurSure:</span> <br> 00-00-00-00-00, adresse@hotmail.fr <br>
    <span id="valeur--coor">Nous Contacter :</span>
    <form method="post">
    <div class="input-field">
      <input type="text" name="nom" value="" class="validate" required>
      <label for="">Nom</label>
    </div>
    <div class="input-field">
      <input type="text" name="prenom" class="validate" value="" required>
      <label for="">Prenom</label>
    </div>
    <div class="input-field">
      <label for="">email</label>
      <input class="validate" type="email" name="email" value="" required>
    </div>
    <div class="input-field">
      <label for="">message</label>
      <textarea class="materialize-textarea" name="message"></textarea>
    </div>
      <button class="btn waves-effect waves-light"  type="submit" name="button" value="Envoyer">Envoyer</button>
    </form>
  </div>
</div>
<?php


if (isset($_POST['button'])) {
  $message = '<p> Nom: ' . $_POST['nom'] . ' Prénom: ' . $_POST['prenom'] . '<br>' . 'Message: ' . $_POST['message'] . '</p>';

if(isset($_POST['message'])){
      $position_arobase=strpos($_POST['email'],'@');
      if($position_arobase===false)
          echo '<p id="errormsg"> Attention! Votre email n\'est pas conforme.</p>';
      else {
          $retour=mail('sha08dow@hotmail.fr','Envoi depuis page rapide', $message, 'From : '.$_POST['email']);
          if($retour)
              echo '<p>Votre message a été envoyé.</p>';
          else
              echo '<p>Erreur.</p>';
      }
  }
}

?>
