<?php
namespace JkDev;

function aceptoNoAcepto($primero, $segundo)
{
    if ($primero === $segundo) {
        return "Tu aceptas!";
    } else {
        return "No aceptas!";
    }
}

echo aceptoNoAcepto("izquierda", "derecha"); 
echo "\n\n";
echo aceptoNoAcepto("ok", "ok"); 
echo "\n\n";

function renovarMes($renovarMes){
  $mesActual = date("F");
  if ($renovarMes !== $mesActual) {
    return "Bienvenido!";
  } else {
    return "Debes renovar membresia";
  }
}

$mesActual = date("F");
echo renovarMes($mesActual);
 
echo "\n\n";
echo renovarMes("July");
