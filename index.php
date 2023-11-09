<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="POST">
        <?php
            include 'funcoes.php';
            include 'bhaskara.php';
        ?>

        <label>Número 01: </label>
        <input type="number" id="num1" name="num1"/><br><br>

        <label>Número 02: </label>
        <input type="number" id="num2" name="num2"/><br><br>

        <label>Número 03: </label>
        <input type="number" id="num3" name="num3"/>

        <br><br>
        <button> Calcular
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
        ?>
        </button>
        <br><br>
        <!-- Área de Texto -->
        <textArea rows="100" cols="40" readonly fixed>
            <?php
                echo somar($num1,$num2)."\n".subtrair($num1,$num2)."\n".multiplicacao($num1,$num2).
                     "\n".divisao($num1, $num2)."\n".potencia($num1,$num2)."\n".raiz($num1)."\n".raiz($num2).
                     "\n".tabuada($num1)."\n".tabuada($num2)."\n\n\n".calcularX($num1,$num2,$num3);
            ?>
        </textArea>
    </form>


</body>
</html>