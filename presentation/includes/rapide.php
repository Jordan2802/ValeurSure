<div class="tel" id="tel">
  <div class="fas fa-mobile-alt" onclick="slideTel()"></div>
  <div class="text cache" id="tel"><span id="valeur--coor">Coordonnées ValeurSure:</span> <br> 00-00-00-00-00, adresse@hotmail.fr <br>
    <span id="valeur--coor">Nous Contacter :</span>
    <form method="post">
      <div class="input-field">
        <input type="text" id="objet" name="objet" value="" class="validate" required>
        <label for="objet">objet</label>
      </div>
      <div class="input-field">
        <input type="text" id="nom" name="nom" value="" class="validate" required>
        <label for="nom">Nom</label>
      </div>
    <div class="input-field">
      <input type="text" id="prenom" name="prenom" class="validate" value="" required>
      <label for="prenom">Prenom</label>
    </div>
    <div class="input-field">
      <input class="validate" id="mail" type="email" name="email" value="" required>
      <label for="mail">email</label>
    </div>
    <div class="input-field">
      <textarea class="materialize-textarea" id="mesasge" name="message"></textarea>
      <label for="message">message</label>
    </div>
      <button class="btn waves-effect waves-light"  type="submit" name="button" value="Envoyer">Envoyer</button>
    </form>
  </div>
</div>
<?php
     $to      = 'sha08dow@hotmail.fr';
     $subject = $_POST['objet'];
     $message = $_POST['message'];
     $headers = $_POST['nom'].' '.$_POST['prenom']. "\r\n" .$_POST['email'];

if (isset($_POST['button'])) {
if(isset($_POST['message'])){
      $position_arobase=strpos($_POST['email'],'@');
      if($position_arobase===false)
          echo '<p id="errormsg"> Attention! Votre email n\'est pas conforme.</p>';
      else {
          $retour=mail($to, $subject, $message, $headers);
          if($retour)
              echo '<p>Votre message a été envoyé.</p>';
          else
              echo '<p>Erreur.</p>';
      }
  }
}

?>
