<?php
$resultado = null;

function media(float $a, float $b, float $c){
    return ($a + $b + $c) / 3;
}


if($_SERVER["REQUEST_METHOD"] === "POST"){
    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];
    $num3 = (float)$_POST["num3"];

    $calcular = $_POST["calcular"] ?? "";

    if($calcular === "media"){
        $resultado = media($num1,  $num2,  $num3);
        
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paullo-Marccos">
    <title>Media PHP</title>
</head>
<body>

<h1>Meu primeiro formulário PHP</h1>
    
    <form method="POST" action="">
        NOTA 1: <input name="num1" step="any" required type="number"><br>
        NOTA 2: <input name="num2" step="any" required type="number"><br>
        NOTA 3: <input name="num3" step="any" required type="number"><br>

        <button type="submit" name="calcular" value="media">Calcular</button>
    </form>

    <?php 
        if($resultado !== null): ?>
        <h2>Resultado: <?=  number_format($resultado, 2, ',', '.') ?></h2>
    <?php endif; ?>
    <?php 
        printf("<a href='../index.php'>Voltar</a>"); ?>

</body>
</html>