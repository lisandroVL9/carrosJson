<?php
function meusContactos(){
	$mc["tlm"]="938167462";
	$mc["email"]="lisandrocarvalho285@gmail.com";

    return $mc;
}

$lisandro = meusContactos();
echo "Telemóvel do Lisandro " . $lisandro["tlm"];
echo "<br>";
$lisandro = meusContactos();
echo "email do Lisandro: " . $lisandro["email"];
?>
