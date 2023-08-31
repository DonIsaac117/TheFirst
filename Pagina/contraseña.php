<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva-contraseña</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
<div class="madre">
    <!--PRIMERA CAJA-->
        <div class="caja">
            <h2 class="SENA">INTRODUZCA SU CONTRASEÑA</h2>
            <img class="imagen" src="Senalogo.png">
        </div>

        <!--FORMULARIO-->
        <form method="post" name="signup-form">
            <div class="form-element">
                <label class="nc">INGRESE SU NUEVA CONTRASEÑA</label></br>
                <input class="ncc" type="password" required="required" placeholder="">
            </div>
            <div class="form-element">
                <label class="contraseña">CONFIRME LA CONTRASEÑA</label></br>
                <input class="password" type="password" required="required" placeholder="">
            </div>
            </br><input class="button" type="submit" value="ENVIAR">   
        </form>
    </div>
</body>
</html>
