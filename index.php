<?php

// Fuera errores
 error_reporting(0);

// inclusiones de otras clases
require "lib/pokemons/sance.php";
require "lib/pokemons/marke.php";
require "lib/pokemons/juaniton.php";
require "lib/pokemons/delalex.php";

// Primer pokemon
$primerpokemon = new sance("Primer pokemon");

$primerpokemon->setnombre("sance");
$primerpokemon->setvida(100);
$primerpokemon->setclase("raro");
$primerpokemon->sethabilidad("tirador");



echo "El primer pokemon es: " .$primerpokemon->getnombre();
echo "<br>";
echo "Su poder de vida es: " .$primerpokemon->getvida();
echo "<br>";
echo "Es un pokemon de clase: " .$primerpokemon->getclase();
echo "<br>";
echo "Su habilidad pokemon es: " .$primerpokemon->gethabilidad();
echo "<br>";
echo "Su combate pokemon es: " .$primerpokemon->combatepokemon();
echo "<hr>";

// Segundo pokemon
$segundopokemon = new marke("Segundo pokemon");

$segundopokemon->setnombre("marke");
$segundopokemon->setvida(120);
$segundopokemon->setclase("epico");
$segundopokemon->sethabilidad("penetrador");


echo "El segundo pokemon es: " .$segundopokemon->getnombre();
echo "<br>";
echo "Su poder de vida es: " .$segundopokemon->getvida();
echo "<br>";
echo "Es un pokemon de clase: " .$segundopokemon->getclase();
echo "<br>";
echo "Su habilidad pokemon es: " .$segundopokemon->gethabilidad();
echo "<br>";
echo "Su combate pokemon es: " .$primerpokemon->combatepokemon();
echo "<hr>";

// Tercer pokemon

$tercerpokemon = new juaniton("Tercero pokemon");

$tercerpokemon->setnombre("juaniton");
$tercerpokemon->setvida(75);
$tercerpokemon->setclase("comun");
$tercerpokemon->sethabilidad("nada de nada");


echo "El tercer pokemon es: " .$tercerpokemon->getnombre();
echo "<br>";
echo "Su poder de vida es: " .$tercerpokemon->getvida();
echo "<br>";
echo "Es un pokemon de clase: " .$tercerpokemon->getclase();
echo "<br>";
echo "Su habilidad pokemon es: " .$tercerpokemon->gethabilidad();
echo "<br>";
echo "Su combate pokemon es: " .$primerpokemon->combatepokemon();
echo "<hr>";

// cuarto pokemon

$cuartopokemon = new delalex("cuarto pokemon");

$cuartopokemon->setnombre("delalex");
$cuartopokemon->setvida(1000);
$cuartopokemon->setclase("Legendario");
$cuartopokemon->sethabilidad("Puede hacer de todo");


echo "El cuarto pokemon es: " .$cuartopokemon->getnombre();
echo "<br>";
echo "Su poder de vida es: " .$cuartopokemon->getvida();
echo "<br>";
echo "Es un pokemon de clase: " .$cuartopokemon->getclase();
echo "<br>";
echo "Su habilidad pokemon es: " .$cuartopokemon->gethabilidad();
echo "<br>";
echo "Su combate pokemon es: " .$primerpokemon->combatepokemon();
echo "<hr>";



 ?>
