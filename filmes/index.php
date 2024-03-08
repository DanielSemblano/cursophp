<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Filme</h1>
    <form method="post" action="save.php">
        <label>Nome do Filme:</label> <br>
        <input type="text" name="filme" /> <br>

        <label>Categoria:</label> <br>
        <input type="checkbox" name="acao"> Ação <br>
        <input type="checkbox" name="aventura"> Aventura <br>
        <input type="checkbox" name="comedia"> Comédia <br>
        <input type="checkbox" name="drama"> Drama <br>
        <input type="checkbox" name="infantil"> Infantil <br>
        <input type="checkbox" name="suspense"> Suspense <br>
        <input type="checkbox" name="terror"> Terror <br>
        <input type="submit">
        



    </form>
</body>
</html>