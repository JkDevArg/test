<?php
namespace JkDev;

function covidE($tipo){
  switch ($tipo){
    case "verde":  
      echo "Bueno";
      break;
    case "amarillo":  
      echo "Moderado";
      break;
    case "naranja":  
      echo "Restriccion nivel 1";
      break; 
    case "rojo": 
      echo "Restricción nivel 3";
      break;
    case "violeta": 
      echo "Toque de queda + Restricción Nivel 4";
      break;
    case "negro":
      echo "Toque de queda. Max Restricción";
      break; 
    default: 
      echo "Invalido";
  }
}

covidE("green");
echo "\n\n";
covidE("yellow");
echo "\n\n";
covidE("maroon");
echo "\n\n";
covidE("hasjgdlajshgd");
