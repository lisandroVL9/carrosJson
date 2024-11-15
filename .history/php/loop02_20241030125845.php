<?php 
//exercício ciclo while
$x = rand(1,20); //tira à sorte um número entre 1 e 20  
while($x != 13) {
    echo "O número é: $x <br>";
$x = rand(1,20);
} 
echo "foi uma sorte sair o 13 <br>";
?>
