<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Itens</title>
</head>
<body>

<a href="new.php">Cadastrar Item</a>

<?php $dbFile = file_get_contents("db.csv"); ?>

<?php

if ($dbFile == "") {
    echo "Não há itens cadastrados!";
} else {
    $itens = explode("\n", $dbFile);

    foreach ($itens as $key => $item) {
        $temp = explode(",", $item);

        echo "<b>Nº do Item: </b>" . $key + 1 . "<br>";
        echo "<b>Descrição:</b>" . ucfirst($temp[0]) . "<br>";
        echo "<b>Tipo:</b>" . ucfirst($temp[1]) . "<br>";
        echo "<b>Estabelecimento:</b>" . ucfirst($temp[2]) . "<br>";
        echo "<hr>";
    }
}

?>

</body>
</html>