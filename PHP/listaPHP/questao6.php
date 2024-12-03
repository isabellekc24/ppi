<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impar ou par</title>
</head>
<body>
    <form method="POST" action="">
    <label for="n">insira um número: </label>
    <input n="name" type="number" value="" /><br/>

    <button type="submit">verificar</button>
    </form>
    <?php
    if($n % 2 === 0){
        echo"O número: $n é par";
    }else{
        echo"o numero $n é impar";
    }
    ?>


</body>
</html>