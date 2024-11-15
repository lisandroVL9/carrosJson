<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota", "Porsche");
print_r($cars);
echo "<br><br>Ordenando o array<br><br>";
sort($cars);
print_r($cars);
?>

</body>
</html>