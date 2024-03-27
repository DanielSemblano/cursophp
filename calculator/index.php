<?php

require "operations.php";

$number1;
$number2;
$operatior;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form>
        <label>Número 1: </label>
        <input type="number" name="number2"><br>

        <label>Número 2: </label>
        <input type="number" name="number1"><br>

        <label>Operação: </label><br>
        <input type="radio" name="operator" value="som">Soma <br>
        <input type="radio" name="operator" value="sub">Subtração <br>
        <input type="radio" name="operator" value="mult">Multiplicação <br>
        <input type="radio" name="operator" value="div">Divisão <br>

        <input type="submit">
    </form>
</body>
</html>