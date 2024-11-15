<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idade = array("Joao"=>"35", "Ana"=>"37", "Luis"=>"43");
    print_r($idade);
    echo "<br><br>Ordenando o array<br><br>";
    arsort($idade);
    print_r($idade);

</body>
</html>