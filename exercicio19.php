<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    Senha: <input type="password" name="senha">
    <input type="submit" name="ver" value="verificar">
</form>

<?php
if(isset($_POST['ver'])){
    $s = $_POST['senha'];

    if(strlen($s) >= 8){
        if(preg_match("/[a-z]/i", $s)){
            if(preg_match("/[0-9]/", $s)){
                echo "senha forte";
            } else {
                echo "tem que ter número";
            }
        } else {
            echo "tem que ter letra";
        }
    } else {
        echo "tem que ter pelo menos 8 caracteres";
    }
}
?>

    
</body>
</html>