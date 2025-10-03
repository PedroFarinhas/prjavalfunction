<?php
$valor = $_GET["valor"];
$valor = number_format($valor,2,",",".");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALOR CONVERTIDO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div style= " display: inline-block;  border: 2px solid black; margin: 10px; padding: 10px;">

        <p>
            <?= "O valor convertido é: {$valor}"  ?>

        </p>

    </div>
    
</body>
</html>