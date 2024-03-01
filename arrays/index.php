<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php

$product = [
    [ "description" => "nike shoes", "quatity" => 15, "price" => 205.75,],
    [ "description" => "adidas shoes", "quatity" => 35, "price" => 59.75,],
    [ "description" => "nike shoes", "quatity" => 75, "price" => 50.50,],
    [ "description" => "nike shoes", "quatity" => 10, "price" => 350.70,]
];
// $product[0] = "açaí";
// $product[1] = "bacaba";
// $product[2] = "açaí branco";
// $product[3] = "camarão";

// var_dump($product);

// print_r($product);
?>

<p><?php echo $product[0]["description"]; ?></p>
<p><?php echo $product[0]["quatity"]; ?></p>
<p><?php echo $product[0]["price"]; ?></p>
<hr>
<p><?php echo $product[1]["description"]; ?></p>
<p><?php echo $product[1]["quatity"]; ?></p>
<p><?php echo $product[1]["price"]; ?></p>
<hr>
<p><?php echo $product[2]["description"]; ?></p>
<p><?php echo $product[2]["quatity"]; ?></p>
<p><?php echo $product[2]["price"]; ?></p>
<hr>
<p><?php echo $product[3]["description"]; ?></p>
<p><?php echo $product[3]["quatity"]; ?></p>
<p><?php echo $product[3]["price"]; ?></p>
<hr>
</body>
</html>