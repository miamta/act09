<?php
require_once "lib/pokemondb.php";
/**
 *
 */
class juaniton extends pokemondb
{
  private $habilidad="";

  function __construct($nombre)
  {
    parent::setnombre($nombre);
    parent::setvida($vida);
    parent::setclase($clase);
  
  }

public function sethabilidad($nuevahabilidad){
  $this->habilidad=$nuevahabilidad;
}
public function gethabilidad(){
  return $this->habilidad;
}





}

 ?>
