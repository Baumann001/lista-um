<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
   </form>

   <?php


         if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
              if(isset($_POST['verificar_numero'])){
                 $numero = $_POST['numero'];

                 echo "<h2>Tabuada do número $numero:</h2>";
                 echo "<ul>";
               

                 for($i = 1; $i <=10; $i++) {
                    $resultado = $numero * $i;
                       echo "<li>$numero x $i = $resultado</li>";
                 };



              };


         };

    ?>
    
</body>
</html>