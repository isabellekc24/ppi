<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Crie um site em PHP que faça o sorteio de um número aleatório no intervalo 
informado pelo usuário por meio de um formulário HTML.-->
<form method="POST" ACTION="">
    <label for="nmin">Numero Mínimo: </label>
    <input min="name" type="number" value="" /><br/>
    
    <label for="nmax">Numero Maximo: </label>
    <input max="name" type="number" value="" /><br/>

    <button type="submit">sortear</button>
</form>
<?php

function sortear($min, $max){
    $min = (int)$min;
    $max = (int)$max;

    return rand($min, $max);
}
    $min = $_POST['min'];
    $max = $_POST['max'];

    echo "<h2>O número sorteado é: $sortear</h2>";


?>
</body>
</html>