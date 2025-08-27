<?php

$idade = filter_input(INPUT_POST,"idade", FILTER_VALIDATE_INT);
$nome = $_GET["nome"];

if ($idade < 12) {
    $mensagem = "Nome: " & $nome & "Idade: " & $idade & " Você é um Criança";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>