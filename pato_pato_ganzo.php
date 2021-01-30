<?php
namespace JkDev;

function patoPatoGanso($es_ganso){
  if (!$es_ganso){
    return "pato";
  }else{
    return "ganso!";
  }
}

echo patoPatoGanso(FALSE);
echo "\n";
echo patoPatoGanso(FALSE);
echo "\n";
echo patoPatoGanso(TRUE);
