<?php

function cafeteira($tipo = "cappuchino")
{
    return "Fazendo café " . $tipo;
}

$x = cafeteira("expresso");

echo $x;