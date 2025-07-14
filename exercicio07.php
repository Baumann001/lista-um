<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Número Perfeito</title>
</head>
<body>

<h2>Verificador de Número Perfeito</h2>

<form method="POST" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar'])) {
        $numero = intval($_POST['numero']);
        $soma = 0;

       
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $soma += $i;
            }
        }

        
        if ($soma == $numero) {
            echo "<p>O número <strong>$numero</strong> é um número perfeito!</p>";
        } else {
            echo "<p>O número <strong>$numero</strong> não é um número perfeito.</p>";
        }
    }
}
?>

</body>
</html>
