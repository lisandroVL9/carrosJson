<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cars = array(array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2), array("Land Rover",17,15), array("Porsche",7,3));
echo $cars[0][0].": em stock: ".$cars[0][1].", vendidos: ".$cars[0][2].".<br>";
echo $cars[1][0].": em stock: ".$cars[1][1].", vendidos: ".$cars[1][2].".<br>";
echo $cars[2][0].": em stock: ".$cars[2][1].", vendidos: ".$cars[2][2].".<br>";
echo $cars[3][0].": em stock: ".$cars[3][1].", vendidos: ".$cars[3][2].".<br>";
echo $cars[4][0].": em stock: ".$cars[4][1].", vendidos: ".$cars[4][2].".<br>";
?>

</body>
</html>