<?php
class GF{

  ///////////////////////////////////////////////////////////////////////////////////////
  //================================VARIABLE D'INSTANCE================================//
  ///////////////////////////////////////////////////////////////////////////////////////

  private static $_currentError = "Aucunnes erreurs .";
  private static $_charMin = [];
  private static $_charMax = [];
  private static $_ignoredFields = [];
  private static $_emailFields = [];
  ///////////////////////////////////////////////////////////////////////////////////////
  //====================================Constructeur===================================//
  ///////////////////////////////////////////////////////////////////////////////////////

  public function __construct(){

  }

  ///////////////////////////////////////////////////////////////////////////////////////
  //================================ACCESSEUR/MUTATEUR=================================//
  ///////////////////////////////////////////////////////////////////////////////////////

  //ACCESSEUR:

  public static function getError(){
    echo self::$_currentError . "<br>";
  }

  //MUTATEUR:

    private static function setError($error){
      self::$_currentError = $error;
    }

  //ADDER:

  public static function addCharMin($key , $value){
    self::$_charMin[$key] = $value;
  }

  public static function addCharMax($key,$value){
    self::$_charMax[$key] = $value;
  }

  public static function addIgnoredField(){
    foreach(func_get_args() as $arg){
      array_push(self::$_ignoredFields,$arg);
    }
  }

  public static function addEmailField(){
    foreach(func_get_args() as $arg){
      array_push(self::$_emailFields,$arg);
    }
  }

  public static function sameField($field1,$field2,$strictMode = false){
    if(existField($field1) && existField($field2)){
      if($strictMode = false && $_POST[$field1] == $_POST[$field2]){
        return true;
      }else{
        if($_POST[$field1] == $_POST[$field2]){
          return true;
        }
      }
    }
    return false;
  }

  ///////////////////////////////////////////////////////////////////////////////////////
  //=======================================METHODES====================================//
  ///////////////////////////////////////////////////////////////////////////////////////

  public static function checkAllField(){
    $returnValue = true;
    $nbEntrees = 0;
    foreach ($_POST as $key => $value) {
      if(!in_array($key,self::$_ignoredFields)){//verifie que le champs ne doit pas être ignoré
        if(in_array($key,self::$_emailFields)){//Verification des champ email
          if(!filter_var($value,FILTER_VALIDATE_EMAIL)){
            $returnValue = false;
            echo "/!\ Le champ " . $key . " n'est pas un email valide .";
          }
        }
        if($value == ""){
            $returnValue = false;
            self::setError("<br>/!\ Le formulaire possede des valeurs null ou non définis .");
          }else{
            if(in_array($key , array_keys(self::$_charMin))){
              if(strlen($value) < self::$_charMin[$key]){
                $returnValue = false;
                self::setError("/!\<br> Le champs : " .$key. " est inférieure à " .self::$_charMin[$key] );
              }
            }else if(in_array($key , array_keys(self::$_charMax))){
              if(strlen($value) > self::$_charMax[$key]){
                $returnValue = false;
                self::setError("/!\<br> Le champs : " .$key. " est supérieure à " .self::$_charMax[$key] );
              }
            }
          }
      }else{
        echo "<br>/!\ Champs " . $key . " ignoré <br>";
      }
    }

    if(count(array_keys($_POST)) <= 1){
      $returnValue = false;
      self::setError("/!\<br> Le formulaire ne contient aucunnes entrées .");
    }
    return $returnValue;
  }

  public static function checkField(){

  }
  ///////////////////////////////////////////////////////////////////////////////////////
  //==================================METHODES PRIVEES ================================//
  ///////////////////////////////////////////////////////////////////////////////////////

  private static function existField($field){
    if(isset($_POST[$field])){
      return true;
    }
    return false;
  }
}
