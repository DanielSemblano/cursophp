<?php

function helloWord() { 
    return "Olá mundo!"; 
}

$mensagem = helloWord();

echo "<h1 style='color:red'>" . $mensagem . "</h1>";