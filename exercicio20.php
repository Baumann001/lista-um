<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <label for="user">Usuário:</label>
    <input type="text" id="user" name="usuario" required><br><br>

    <label for="pass">Senha:</label>
    <input type="password" id="pass" name="senha" required><br><br>

    <button type="submit" name="entrar">Entrar</button>
</form>

<?php
if (isset($_POST['entrar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

   
    $userCorreto = "admin";
    $senhaCorreta = "1234";

    if ($usuario == $userCorreto && $senha == $senhaCorreta) {
        echo "Login bem-sucedido!";
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

    
</body>
</html>