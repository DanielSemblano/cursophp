<?php

$conteudo = [
    "Acai",
    "feijão",
    "Arroz",
    "Macarrão"
];

$dados = "";

foreach ($conteudo as $c) {
    $dados .= "\n" . $c;
}

$filereturn = file_put_contents("dados.txt", $conteudo, FILE_APPEND);

if($filereturn){
    echo "Arquivo salvo com sucesso em dados.txt";
} else{
    echo "Não foi possivel salvar o arquivo. Por que não sei, te vira!";
}

$itens = explode(".", $arquivo);

echo "<br>";
var_dump($itens);