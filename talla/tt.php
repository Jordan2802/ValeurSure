<?php
echo "string";
require("GestionnaireFormulaire.php");

GF::addEmailField("emailcontactassu");
GF::addIgnoredField("champs1","champs2");



if (GF::checkAllField()) {
  echo "Form correct";
}
else {
  echo GF::getError();
}
