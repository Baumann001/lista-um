<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="">
    <label for="num1">Digite o primeiro número:</label>
    <input type="number" id="num1" name="num1" required>
    
    <label for="num2">Digite o segundo número:</label>
    <input type="number" id="num2" name="num2" required>
    
    <label for="num3">Digite o terceiro número:</label>
    <input type="number" id="num3" name="num3" required>
    
    <button type="submit" name="verificar">Verificar</button>
</form>


<?php
if(isset($_POST['verificar'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];

    $maior = $n1;

    if($n2 > $maior){
        $maior = $n2;
    }

    if($n3 > $maior){
        $maior = $n3;
    }

    echo "O maior número é: ".$maior;
}
?>

    
</body>
</html>