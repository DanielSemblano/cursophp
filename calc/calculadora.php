<?php

include "../calc/soma.php";
include "../calc/subtracao.php";
include "../calc/multiplicacao.php";
include "../calc/divisao.php";

$resultado = $_POST['calculo'];
$n1 = 15;
$n2 = 3;

$result1 = add($n1, $n2);
$result2 = sub($n1, $n2);
$result3 = mult($n1, $n2);
$result4 = div($n1, $n2);

if($resultado == "adicao"){
    echo "Resultado: $result1";
} if($resultado == "subtracao") {
    echo "Resultado: $result2";
} if ($resultado == "multiplicacao") {
    echo "Resultado: $result3";
} elseif ($resultado == "divisao") {
    echo "Resultado: $result4";
}

?>