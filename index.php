<?php
$nome = "Paulo";
$idade = 20;

$n1 = 4;
$n2 = 5;

$resultado = $n1 + $n2;
?>

<?php 
$resultado1 = null;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];
    $operacao = $_POST["operacao"];
    
    switch($operacao){
        case "somar";
        $resultado1 = $num1 + $num2;
        break;

        case "subtrair";
        $resultado1 = $num1 - $num2;
        break;

        case "multiplicar";
        $resultado1 = $num1 * $num2;
        break;

        case "dividir";
            if($num2 == 0){
            $resultado1 = "Não é possivel dividir por 0";
        }else{
        $resultado1 = $num1 / $num2;
        }

        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paullo-Marccos">
    <title>Calculadora em PHP</title>
</head>
<body>
     <?php
    printf("<h1> Olá, Mundo! </h1> <br>" );
    ?>
    <?php 
        printf("Olá, eu sou o $nome e eu tenho $idade anos!<br>" ) ;
        printf("A soma dos numeros 4 e 5 é igual a $resultado<br><br>");
    ?>

    <form method="POST" action="">
        N1: <input type="number" name="num1" step="any" requiered><br>
        N2: <input type="number" name="num2" step="any" requiered><br><br>

        <select name="operacao">
            <option value="somar">Somar (+)</option>
            <option value="subtrair">Subtrair (-)</option>
            <option value="multiplicar">Multiplicar (*)</option>
            <option value="dividir">Dividir (/)</option>
        </select>

        <button type="submit">Calcular</button>
   
    </form>
        <?php 
            if($resultado1 !== null): ?>
            <h2>Resultado: <?= $resultado1 ?> </h2>
        
            <?php endif; ?>

        <?php 
        printf("<a href='php/media.php'>Media</a><br>");
  
        printf("<a href='php/nascimento.php'>Nascimento</a><br>");
    
        ?>
   
</body>
</html>