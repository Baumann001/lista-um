<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    Peso: <input type="text" name="p"><br><br>
    Altura: <input type="text" name="a"><br><br>
    <input type="submit" name="btn" value="ver">
</form>

<?php
if(isset($_POST['btn'])){
    $peso = $_POST['p'];
    $alt = $_POST['a'];

    if($alt > 0){
        $imc = $peso / ($alt * $alt);
        echo "IMC: ".$imc."<br>";

        if($imc < 18.5){
            echo "magro";
        } else if($imc < 25){
            echo "normal";
        } else if($imc < 30){
            echo "acima do peso";
        } else if($imc < 35){
            echo "obesidade 1";
        } else if($imc < 40){
            echo "obesidade 2";
        } else {
            echo "obesidade 3";
        }
    } else {
        echo "altura errada";
    }
}
?>

</body>
</html>
    
</body>
</html>