<?php
/**
 *
 */
class pokemondb
{
  private $vida=100;
  private $nombre="";
  private $clase="";
  private $combates="";




// Getters y Setters
public function setvida($valor){
  $this->vida=$valor;
}
public function getvida(){
  return $this->vida;
}

public function setnombre($Nuevonombre){
  $this->nombre=$Nuevonombre;
}
public function getnombre(){
return $this->nombre;
}


public function setclase($Nuevaclase){
  $this->clase=$Nuevaclase;
}
public function getclase(){
return $this->clase;
}


public function combatepokemon(){
$this->combates=rand(1,100);
return $this->combates;

}


}

 ?>
