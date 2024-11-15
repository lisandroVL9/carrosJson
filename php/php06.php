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
        echo '<img src="https://fpfimagehandler.fpf.pt/ScoreImageHandler.ashx?type=Organization&id=503" alt="">';
        break;
    case "azul":
  	  echo "Azul e branco é o coração!";
        echo '<img src="https://static.fnac-static.com/multimedia/Images/PT/NR/99/ca/8d/9292441/1541-4.jpg" alt="">';
        break;
    case "verde":
  	  echo "Lagarto à vista!";
        echo '<img src="https://static.fnac-static.com/multimedia/Images/PT/NR/97/ca/8d/9292439/1541-4.jpg" alt="">';
        break;
    default:
  	  echo "Com essas cores não ganhas nada!";
        echo '<img src="https://t4.ftcdn.net/jpg/06/46/41/03/360_F_646410322_YKC8bYlPRfeVUETHScgvyv3GfrDAmTf8.jpg" alt="">';
}
?>

</body>
</html>