<?php
namespace JkDev;

function arbolFamiliar($porcentajeCompADN)
{
  if($porcentajeCompADN === 100){
    echo "Gemelos idénticos";
  } elseif ($porcentajeCompADN > 34){
    echo "padre e hijo o hermanos completos";
  } elseif ($porcentajeCompADN > 13){
    echo "abuelo y nieto, tía / tío y sobrina / sobrino, o medio hermanos";
  } elseif ($porcentajeCompADN > 5){
    echo "primos hermanos";
  } elseif ($porcentajeCompADN > 2){
    echo "primos segundos";
  } elseif ($porcentajeCompADN > 0){
    echo "primos terceros";
  } else {
    echo "No genéticamente relacionado";
  }
}

arbolFamiliar(100);
echo "\n\n";
arbolFamiliar(56);
echo "\n\n";
arbolFamiliar(18);
echo "\n\n";
arbolFamiliar(10);
echo "\n\n";
arbolFamiliar(3);
echo "\n\n";
arbolFamiliar(1);
