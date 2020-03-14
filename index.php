<?php

include('Persona.php');

//Creacion de un objeto o instancia de la clase
$julianColorado = new Persona();

echo($julianColorado->nombre);

$julianColorado->nombre="Juliancito";
echo("<br>");
echo($julianColorado->nombre);
echo("<br>");

$nombres=array("Juan","Ana");
echo $nombres[0];

echo("<br>");
$julianColorado->saludar($nombres[0]);

?>