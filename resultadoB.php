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
    <header>
        
    </header>





</body>
<footer>

    
    <div class="texto">
        
        <?php 
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];
        if($valor2 > $valor1){
            $temp=$valor1;
            $valor1=$valor2;
            $valor2=$temp;
           }
           if($valor3 > $valor2){
            $temp=$valor2;
            $valor2=$valor3;
            $valor3=$temp;
           }
           if($valor3 > $valor1){
            $temp=$valor1;
            $valor1=$valor3;
            $valor3=$temp;
           }
        ?>
        <?php echo "$valor1 |  $valor2 | $valor3 "?>
    </div>
</footer>

</html>