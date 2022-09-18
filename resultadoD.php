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

      $numero1 = 0;

$numero1 = $_POST["numero1"];

if($numero1 == 1){
echo "Janeirão, melhor mes do ano";
}
elseif($numero1 == 2){
    echo"Fevereirozada, volta as aulas";
}
elseif($numero1 == 3){
    echo"Marçola, o mes dos marcos";
}
elseif($numero1 == 4){
    echo"Abril Fechou, é eu sei que é uma piada ruim";
}
elseif($numero1 == 5){
    echo"Maiozao, mes das maioneses";
}
elseif($numero1 == 6){
    echo"Junheta, festa junina uhul";
}
elseif($numero1 == 7){
    echo"Julhota, frio pra caramba";
}
elseif($numero1 == 8){
    echo"Agostinho, o mes dos carraras";
}
elseif($numero1 == 9){
    echo"Setembroso Amarelo, proibido suicidio";
}
elseif($numero1 == 10){
    echo"Outubro Rosa, nao sei oque dizer";
}
elseif($numero1 == 11){
    echo"Novembrinho, mes perto do natal";
}
elseif($numero1 == 12){
    echo"Dezembron, Papai Noel";
}else{
    echo"passou de dezembro é janeiro po, n tem mes 13";
} 
        ?>
        <p></p>
        
    </div>
</footer>

</html>