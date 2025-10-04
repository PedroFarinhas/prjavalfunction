<?php

$value = $_GET["value"];
$coin = $_GET["coin"];
$conversao = 0;
$euro = 0.16;
$dollar = 0.19;
$dinar = 0.057;
$taxa = 0;
$sigla = "";
$mensagem = "";

function validateIn($value, $coin){
if (!isset($coin) || filter_var($value, FILTER_VALIDATE_INT) == false)  {
      if( empty($value)||$value<=0)
       return false;
} else {
    return true;
}}

function selection($taxa, $sigla, $coin){  
    if ($coin == "Euro") {
        $taxa = 0.16;
        $sigla = " €: ";
         return $taxa;$sigla;$coin;
    } 
    if ($coin == "Dollar") {
        $taxa = 0.19;
        $sigla = " $: ";
         return $taxa;$sigla;$coin;
    } 
    if ($coin == "Dinarkuwaitiano") {
        $taxa = 0.057;
        $coin = "Dinar Kuwaitiano";
        $sigla = " KWD: ";
         return $taxa;$sigla;$coin;
    } }

function math($taxa, $value){ 
    $conversao = $taxa*$value;
    return $conversao;
}

function validateOut($conversao, $value){
    $value = number_format($_GET["value"], 2, ",", ".");
    $conversao = number_format($conversao, 2, ",", ".");
   
    }

     $mensagem = "Você selecionou " . $coin . ", a taxa de conversão é de " . $taxa . ", o value para conversão foi de R$: " . $value .  ".  Convertendo ficou " . $sigla . $conversao. ".";

    function sendMensage($mensagem){
       
         echo $mensagem;
    }

    if (validateIn($value, $coin)==true ){
        $mensagem = sendMensage($mensagem);
    }else{
 { header("Location: ../index.html");}
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>value CONVERTIDO</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div style=" display: inline-block;  border: 2px solid black; margin: 10px; padding: 10px;">
        <p>
            <?= sendMensage($mensagem) ?>
        </p>
    </div>
</body>
</html>