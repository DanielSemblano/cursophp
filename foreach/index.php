<?php
$clientes = [
    ["name" => "Peter Parker", "email" => "parker.peter@hotmail.com"],
    ["name" => "Mery Jane", "email" => "maryjane@yahoo.com"],
    ["name" => "Gwen Stacy", "email" => "stacy.gwen@gmail.com"],
    ["name" => "Otto Octavius", "email" => "dr.octavius@outlook.com"],
    ["name" => "Norman Osborn", "email" => "greengoblin@osborn.com"],
    ["name" => "Harry Osborn", "email" => "greengoblin2@osborn.com"],
];

foreach ($clientes as $cliente) {
    echo "<b>Nome: </b>" . $cliente["name"] . "<br>";
    echo "<strong>E-mail: </strong>" . $cliente["email"] . "<br>";
    echo "<br>";
}

echo "<hr>";

// echo "<pre>";
// print_r($clientes);
// echo "</pre>";

foreach ($clientes as $key => $value) {
    echo  $key + 1 . " - " . $value["name"] . " - " . $value["email"] . "<br>";
}

echo "<hr>";

foreach ($clientes as  $cliente) {
    foreach ($cliente as $chave => $valor) {
        echo $chave . " - " . $valor . "<br>";
    }
    echo "<br>";
}