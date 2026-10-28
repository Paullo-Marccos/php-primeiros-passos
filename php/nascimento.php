<?php 

$mostrar = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"] ?? "Não informado";
    $ano = $_POST["ano"]?? 0;
    $sexo = $_POST["sexo"] ?? "Não informado";

    $idade = date("Y") - (int)$ano;
    $mostrar = true;
    }
?>



<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paullo-Marccos">
    <title>idade PHP</title>
</head>
<body>
    
<form method="POST" action="">
    Nome: <input type="text" name="nome"><br>
    Ano de Nascimento: <input type="number" name="ano"><br>

    <fieldset><legend>Sexo</legend>

    <input type="radio" name="sexo" value="Masculino" id="masc">
    <label for="masc">Masculino</label><br>

    <input type="radio" name="sexo" value="Feminino" id="fem">
    <label for="fem">Feminino</label><br>

    <button type="submit" value="enviar">Enviar</button>

    </fieldset>
</form>

   <?php 
    if($mostrar): ?>
    <h2> <?= htmlspecialchars($nome) ?> é do sexo <?= htmlspecialchars($sexo) ?> e tem <?= htmlspecialchars($idade) ?> ano(s) </h2>
    <?php endif; ?>
                

    <?php 
        printf("<a href='../index.php'>Voltar</a>"); ?>



</body>
</html>