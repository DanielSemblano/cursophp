<?php

function cadastrarItem($nome, $quantidade = 0){
    $mensagem = "<p><b>Nome: </b>  <i>$nome</i>  </p>";
    if ($quantidade > 0) {
        return $mensagem . "<p><b>Quantidade: </b> <i>$quantidade</i></p>";  
    } 
    
    return "<strong>Você precisa informar a quantidade!</strong>";
    
    
}

$x = cadastrarItem("Notebook Asus I3", 10);

echo $x;

// function somar($arg1, $arg2)
// {
//     $valor = $arg1 + $arg2;
//     return $valor;
// }

// $resultado = somar(5,3);

// echo $resultado;

// function genero($sigla = "M")
// {
    
// }

// function somar($arg1, $arg2)
// {
//     $valor = $arg1 + $arg2;
//     return $valor;
// }

// $resultado = somar(5,3);

// echo $resultado;



// function helloWord() { 
//     return "Olá mundo!"; 
// }

// $mensagem = helloWord();

// echo "<h1 style='color:red'>" . $mensagem . "</h1>";