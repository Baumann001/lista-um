<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="number" name="anoDigitado" placeholder="Digite o ano" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php
if (isset($_POST['verificar'])) {
    $ano = $_POST['anoDigitado'];

    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "O ano $ano é bissexto.";
    } else {
        echo "O ano $ano não é bissexto.";
    }
}
?>
    
</body>
</html>