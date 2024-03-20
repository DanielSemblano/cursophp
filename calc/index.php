<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">  
    <title>Calculadora</title>
</head>
<body>
    <div class="fundo">
        <h2>Calculadora</h2>
    </div>
    <div class="calculadora">
    <Form method="POST" action="calculadora.php">
    <label><b>Escolha uma opção de calculo:</b></label> <br>  
        <input type="radio" name="calculo" value="adicao"> Adição <br>
        <input type="radio" name="calculo"  value="subtracao"> Subtração <br>
        <input type="radio" name="calculo"  value="multiplicacao"> Multipicação <br>
        <input type="radio" name="calculo"  value="divisao"> Divisão <br>
        <input class="botao" type="submit" value="Calcular">
    </Form>
    </div>
</body>
</html>













