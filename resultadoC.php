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
    $nomecompleto= $_POST["nomecompleto"];
    $genero= $_POST["genero"];
    $idade= $_POST ["idade"];

    if ($idade > 25){
        echo "$nomecompleto | $genero | $idade";
        echo "<br>Você pode se cadastrar!";
    }else{
        echo "$nomecompleto | $genero | $idade";
        echo "<br>Você não pode se cadastrar!";
    }
    ?>  
        
        <p></p>
        
    </div>
</footer>

</html>