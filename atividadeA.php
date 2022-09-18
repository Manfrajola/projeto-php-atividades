<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo8.css">
    <link rel="icon" href="img/icone.jpeg">
    <title>CB Atividade</title>
</head>

<body>
    





</body>
<footer>

    <div class="texto">
        <form action="resultadoA.php" method="post">
            valor 1:
        <input type="number" name="valor1" default=0>

        <p></p>
            valor 2:
        <input type="number" name="valor2" default=0>
        <p></p>
        <input type="submit">
        </form>
        <?php 
        $valor1 = $_GET["valor1"];
        $valor2 = $_GET["valor2"];
        $soma = ($valor1 + $valor2); 
        ?>
    </div>
</footer>

</html>