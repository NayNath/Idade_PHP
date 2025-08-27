<?php

$idade = $_GET["idade"];
$nome = $_GET["nome"];

$mensagemPrincipal = "<p> Nome: " . $nome . " Idade: " . $idade . "</p> ";

if ($idade < 12) {
    $mensagem = "<p> Você é um Criança";
}
else{
    if ($idade >=12 && $idade<=17) {
        $mensagem = "<p> Você é um Adolecente</p> ";
    } 
    else{
        if($idade>=18 && $idade<25){
            $mensagem = "<p> Você é um Jovem</p> ";}
        else{
            if($idade>=26 && $idade<60){
                $mensagem = "<p> Você é um Adulto</p> ";}
           else{
                $mensagem = "<p> Você é um Melhor idade</p> ";
            }
        }
    }
}

if ($idade >= 18) {
    $mensagemSistema = " Bem Vindo " . $nome . " você pode etrar no sistema!!!";
}
else{
    $mensagemSistema = " Negado! Apenas maior de 18 pode ingressar!";
}



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior ou Menor de idade</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <h1>Sistema maior idade</h1>
    <div id="valor">
        <?php
            echo $mensagemPrincipal;
            echo $mensagem;
            echo $mensagemSistema;
        ?> 
    </div>
</body>
</html>