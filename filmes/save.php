<?php
$filme =isset($_POST["filme"]) ? $_POST["filme"]: "";
$acao =isset($_POST["acao"]) ? $_POST["acao"]: "";
$aventura =isset($_POST["aventura"]) ? $_POST["aventura"]: "";
$comedia =isset($_POST["comedia"]) ? $_POST["comedia"]: "";
$drama =isset($_POST["drama"]) ? $_POST["drama"]: "";
$infantil =isset($_POST["infantil"]) ? $_POST["infantil"]: "";
$suspense =isset($_POST["suspense"]) ? $_POST["suspense"]: "";
$terror =isset($_POST["terror"]) ? $_POST["terror"]: "";

$categotias = [
    "acao" => $acao, 
    "aventura" => $aventura, 
    "comedia" => $comedia, 
    "drama" => $drama, 
    "infantil" => $infantil, 
    "suspense" => $suspense, 
    "terror" => $terror
];

echo "<pre>";
print_r($categorias);
echo "</pre>";
