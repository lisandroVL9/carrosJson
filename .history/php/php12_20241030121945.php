<?php
function areaCircunferencia($raio) {
  return pi() * $raio * $raio;
}
function perimetroCircunferencia($raio) {
    return 2*pi() * $raio;
  }
echo "area=";
echo areaCircunferencia(5); // chamar a função
?>
