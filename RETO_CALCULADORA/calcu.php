<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calcu.css">
    
</head>
<body>
    <h1>CALCULADORA</h1>
    <form method="post" action="calcu.php" name="form" style="background-image: url(ima.png);">
        <div class="form-element">
            <label class="lab">PRECIO DEL PRODUCTO</label></br>
            <input type="number" class="inp"  name="pre" required="required">
        </div>

        <div class="form-element">
            <label class="lab">Descuento</label></br>
            <input type="number" class="inp" name="porc" required="required"></br>
            <button class="boton">ENVIAR</button>
        </div>


<div class="form-element">

        <?php
        if ($_POST) 
        {
            $pre = $_POST["pre"];
            $porc = $_POST["porc"];
            $resultado = $pre - ($pre * $porc / 100);
            echo "<p>El resultado de la operacion es: $resultado</p>";
        }
        ?>
</div>
        
   


    </form>
</body>
</html>