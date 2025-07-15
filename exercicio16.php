<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST">
    <input type="number" name="num1" placeholder="Idade" required>
    <input type="text" name="txt" placeholder="nome" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php
if (isset($_POST['verificar'])) {
    $num1 = $_POST['num1'];
    $txt = $_POST['txt'];

    if($num1 > 16 ){
        echo "Voce  pode votar $txt!";
    }elseif($num1 <16 ){
    echo "Voce não pode votar $txt!";
    }else{
    echo "voce pode votar!";
    }


}

?>
</body>
</html>