<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  //exercicio - caso
$corFavorita = $_REQUEST["cor"];

switch ($corFavorita) {
    case "vermelho":
        echo "És um lampião!";
        break;
    case "azul":
  	  echo "Azul e branco é o coração!";
        break;
    case "verde":
  	  echo "Lagarto à vista!";
        break;
    default:
  	  echo "Com essas cores não ganhas nada!";
}
?>

</body>
</html>