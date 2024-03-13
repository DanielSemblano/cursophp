<?php
/* RECEBENDO AS VARIAVES DO FORMULÁRIO */
$filme =isset($_POST["filme"]) ? $_POST["filme"]: "";
$acao =isset($_POST["acao"]) ? $_POST["acao"]: "";
$aventura =isset($_POST["aventura"]) ? $_POST["aventura"]: "";
$comedia =isset($_POST["comedia"]) ? $_POST["comedia"]: "";
$drama =isset($_POST["drama"]) ? $_POST["drama"]: "";
$infantil =isset($_POST["infantil"]) ? $_POST["infantil"]: "";
$suspense =isset($_POST["suspense"]) ? $_POST["suspense"]: "";
$terror =isset($_POST["terror"]) ? $_POST["terror"]: "";

$categorias = [
    "acao" => $acao, 
    "aventura" => $aventura, 
    "comedia" => $comedia, 
    "drama" => $drama, 
    "infantil" => $infantil, 
    "suspense" => $suspense, 
    "terror" => $terror
];

// echo "<pre>";
// print_r($categorias);
// echo "</pre>";
?>
<!-- EXIBINDO O HTML COM AS INFORMAÇÕES ENVIADAS PELO FORMULARIO -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do filme</title>
</head>
<body>
    <p>Filme: <?php echo $filme; ?></p>
    <p>Categorias: </p>
    <ul>
    <?php
    foreach ($categorias as $key => $value) {
        if ($value) {
            echo "<li>" . $key . "</li> <br>";
        }
    }
    ?>
    </ul>
</body>
</html>

