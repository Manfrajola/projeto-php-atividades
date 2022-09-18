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
        
        <?php 
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $soma = $valor1 + $valor2;
        $resultado = $soma;
        if($soma>10){
           echo $resultado = $soma + 8;
        }else{
            echo $resultado = $soma - 5;
        } ?>
        
        
        <p></p>
        
    </div>
</footer>

</html>