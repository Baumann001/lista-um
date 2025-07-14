<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form method="POST" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit" name="verificar">Verificar</button>
</form>


   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_digitado'])){

        $numero = $_POST['digita_numero'];
        $i=1;

            while ($i <= $numero) {
            if ($numero % $i == 0) {
                echo $i . " ";
            }
            $i++;
        };
    };
};
    
?>
</body>
</html>