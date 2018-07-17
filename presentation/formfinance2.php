<?php
session_start();
$_SESSION['sexe'] = $_POST['sexe'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['adresse'] = $_POST['adresse'];
$_SESSION['postal'] = $_POST['postal'];
$_SESSION['ville'] = $_POST['ville'];
 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Formulaire de demande de financement</title>
     <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/style2.css">
     <link rel="stylesheet" href="css/style-form.css">
     <link rel="stylesheet" href="css/footer.css">
     <link rel="stylesheet" href="css/media.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


   </head>
   <body>
     <header>
       <?php include('includes/nav.php'); ?>
       <div class="barre-burger">
         <button id="hamburger-button" onclick="cacher();"></button>
       </div>
     </header>
     <h1 class="bande">DEMANDE DE FINANCEMENT</h1>
     <div class="progression">
       <div class="bulle">
         <p class="etape">1</p>
       </div>
       <div class="bulle actuel">
         <p class="etape">2</p>
       </div>
       <div class="bulle">
         <p class="etape">fin</p>
       </div>
     </div><br><br>

     <form class="formulaire" id="formulaire2" action="traitement.php" method="post"><br>
       <label for="demande">Types de projet: </label><br>
       <select id="demande" name="demande">
         <option value="Lorem">Lorem</option>
         <option value="ipsum">Ipsum</option>
         <option value="Bakoum">Bakoum</option>
       </select><br><br>
       <label for="cni">Photocopie carte d'identité: </label><br>
       <input type="file" id="cni" name="cni" value="" accept=".jpg, .jpeg, .png, .pdf"><br><br>
       <label for="impots">Avis d'imposition: </label><br>
       <input type="file" id="impot" name="impot" value=""><br><br>

       <input class="envoi" type="submit" name="" value="ENVOYER LE DEVIS"><br><br>
     </form>
     <footer>
       <?php include('includes/footer.php'); ?>
     </footer>
     <script type="text/javascript" src="js/burger.js"></script>
     <script type="text/javascript" src="js/contact.js"></script>
   </body>
   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="jquery.validate.min.js"></script>
   <script type="text/javascript" src="./js/script2.js"> -->

   </script>
 </html>
