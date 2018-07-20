<div class="tel" id="tel">
  <div class="fas fa-mobile-alt" onclick="slideTel()"></div>
  <div class="text cache" id="tel"><span id="valeur--coor">Coordonnées ValeurSure:</span> <br> 00-00-00-00-00, adresse@hotmail.fr <br>
    <form class=""  method="post">
      <label for="">Nom</label><input type="text" name="nom" value="" required>
      <label for="">Prenom</label><input type="text" name="prenom" value="" required>
      <label for="">email</label><input type="mail" name="email" value="" required>
      <label for="">message</label> <textarea name="message" rows="6" cols="30"></textarea>
      <input type="submit" name="button" value="Envoyer">
    </form>
  </div>
</div>
<?php

$message = $_POST['nom'].' '.$_POST['prenom'].' '.$_POST['message']
if(isset($_POST['message'])){
    $position_arobase=strpos($_POST['email'],'@');
    if($position_arobase===false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour=mail('sha08dow@hotmail.fr','Envoi depuis page rapide', $message, 'From : '.$_POST['email']);
        if($retour)
            echo '<p>Votre message a été envoyé.</p>';
        else
            echo '<p>Erreur.</p>';
    }
}
?>
