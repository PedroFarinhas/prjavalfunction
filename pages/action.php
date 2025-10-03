<?php
$value = $_GET["valor"];
$conversao = 0;
$euro = 0.16;
$dollar = 0.19;
$dinar = 0.057;

if (!isset($_GET['moeda']) || filter_var($value, FILTER_VALIDATE_INT) == false) {
    $mensagem = "Selecione uma opção e digite os números corretamente";
} else {
    $moeda = $_GET['moeda'];
    if ($moeda == "Euro") {
        $conversao = ($value * $euro);
        $sigla = " €: ";
        $taxa = $euro;
    }
    if ($moeda == "Dollar") {
        $conversao = $value * $dollar;
        $sigla = " $: ";
        $taxa = $dollar;
    }
    if ($moeda == "Dinarkuwaitiano") {
        $conversao = $value * $dinar;
        $moeda = "Dinar Kuwaitiano";
        $sigla = " KWD: ";
        $taxa = $dinar;
    }
    $value = number_format($_GET["valor"], 2, ",", ".");
    $conversao = number_format($conversao, 2, ",", ".");
    $mensagem = "Você selecionou " . $moeda . ", a taxa de conversão é de " . $taxa . ", o valor para conversão foi de R$: " . $value .  ".  Convertendo ficou " . $sigla . $conversao. ".";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALOR CONVERTIDO</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div style=" display: inline-block;  border: 2px solid black; margin: 10px; padding: 10px;">
        <p>
            <?= "{$mensagem}"  ?>
        </p>
    </div>
</body>
</html>