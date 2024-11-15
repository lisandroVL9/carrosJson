<?php
function meusContactos(){
	$mc["tlm"]="919064760";
	$mc["email"]="alf@esmonserrate.org";

    return $mc;
}

$lira = meusContactos();
echo "Telemóvel do Lira: " . $lira["tlm"];
?>
