<?php
function meusContactos(){
	$mc["tlm"]="938167462";
	$mc["email"]="lisandrocarvalho285@gmail.com";

    return $mc;
}

$lira = meusContactos();
echo "Telemóvel do Lisandro " . $lira["tlm"];
echo "<br>";
$lira = meusContactos();
echo "email do Lisandro: " . $lira["email"];
?>
