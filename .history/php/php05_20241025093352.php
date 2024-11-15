<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//exercício - SE
$numero = $_REQUEST["numero"];

if ($numero < "100") {
    echo "O número é menor que 100!";
} elseif ($numero <= "200") {
    echo "O número está entre 100 e 200!";
} else {
    echo "O número é maior que 200!";
}
?>

</body>
</html>