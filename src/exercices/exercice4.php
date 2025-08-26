<?php 

$nombre = 4;

function estPair($nombre){
   if ($nombre%2 == 1) {
      echo "Le $nombre est impair";
   } else {
      echo "Le $nombre est pair";
   }
}

echo estPair($nombre);

?>
