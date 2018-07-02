<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TRAITEMENT</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h1 class="bande">DEMANDE DE FINANCEMENT</h1>
    <div class="progression">
      <div class="bulle">
        <p class="etape">1</p>
      </div>
      <div class="bulle">
        <p class="etape">2</p>
      </div>
      <div class="bulle actuel">
        <p class="etape">fin</p><br><br><br>
      </div>
    </div>
  </body>
</html>

<?php
  $_SESSION['demande'] = $_POST['demande'];
  $_SESSION['cni'] = $_POST['cni'];
  $_SESSION['impot'] = $_POST['impot'];
  $_FILES['cni'] = $_POST['cni'];

  echo $_SESSION['nom'] . '<br>' . $_SESSION['prenom'] . '<br>' . $_SESSION['sexe'] . '<br>';
  echo $_SESSION['tel'] . '<br>' .$_SESSION['adresse'] . '<br>' ;
  echo $_SESSION['postal'] . '<br>' . $_SESSION['ville'] . '<br>' ;
  echo $_SESSION['demande'] . '<br>' . $_SESSION['cni'] . '<br>' . $_SESSION['impot'] . '<br>';
 ?>
