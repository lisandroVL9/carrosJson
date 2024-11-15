<?php
function fazCafe($type = "cappuccino"){
    return "Fazendo uma chavena de café $type.<br>";
}
echo fazCafe();
echo fazCafe(null);
echo fazCafe("espresso");
?>
