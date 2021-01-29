<?php 
function eligeCarril($carriles)
{
  if ($carriles <= 12){
    return "Expreso Rapido";
  } else {
    return "Expreso Normal";
  }
}
function puedeVotar($edad)
{
  if ($edad >= 18){
    return "Si";
  } else {
     return "no";
  }
}

echo eligeCarril(1);
echo "\n\n";
echo eligeCarril(13);
echo "\n\n";
echo puedeVotar(19);
echo "\n\n";
echo puedeVotar(13);
