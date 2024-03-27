<?php
$description = $_POST['description'] ?? "";
$category    = $_POST['category']    ?? "";
$local       = $_POST['local']       ?? "";

if ($description && $category && $local) {
    $dados ="\n" . $description . "," . $category . "," . $local;
    file_put_contents('db.csv',$dados, FILE_APPEND);
    echo "Dados salvos com sucesso na base de dados!";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma de pedido de comida">
    <title>Cadastrar Item</title>
</head>
<body>
    <h1>Cadastrar Item</h1>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
       <label>Descrição: </label><br>
       <input type="text" name="description"><br>

       <label>Categoria: </label>
       <select name="category">
        <option value="bebida">Bebida</option>
        <option value="lanche">Lanche</option>
        <option value="refeição">Refeição</option>
        <option value="sobremesa">Sobremesa</option>
       </select>
       <br>

       <label>Estabelecimento</label>
       <input type="text" name="local"><br>

       <input type="submit">
    </form>

    <a href="index.php">Voltar</a>
</body>
</html>