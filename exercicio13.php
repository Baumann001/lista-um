<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="">
        <label for="digita_numero">Temperatura em Celsius:</label>
        <input type="number" id="digita_numero" name="digita_numero" required>
        <button type="submit" name="verificar_digitado">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_digitado'])){
        $numero = $_POST['digita_numero'];
        
        
        $fahrenheit= ($numero*9/5)+32;
        

        echo "<p> a conversão da: $fahrenheit</p>";
        
    
    }
}
?>
</body>
</html>