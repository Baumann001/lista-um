<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Dia: <input type="number" name="d"><br><br>
    Mês: <input type="number" name="m"><br><br>
    Ano: <input type="number" name="a"><br><br>
    <input type="submit" name="botao" value="ver">
</form>

<?php
if(isset($_POST['botao'])){
    $d = $_POST['d'];
    $m = $_POST['m'];
    $a = $_POST['a'];

    if(checkdate($m, $d, $a)){
        echo "data válida";
    }else{
        echo "data errada";
    }
}
?>

    
</body>
</html>