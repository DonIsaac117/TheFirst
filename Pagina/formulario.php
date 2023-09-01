<?php 

$conex = mysqli_connect("localhost","root","","easygenz"); 


if (isset($_POST['register'])) {
    if (strlen($_POST['username']) >= 1 &&
    strlen($_POST['Numero_documento']) >= 1 &&
    strlen($_POST["email"]) >= 1 &&
    strlen($_POST['Contraseña']) >= 1  &&
    strlen($_POST['Numero_ficha']) >= 1  &&
    strlen($_POST['Tipo_sangre']) >= 1 &&
    strlen($_POST['alergias']) >= 1 ){

	    $username = trim($_POST['username']);
	    $docu = trim($_POST['Numero_documento']);
      $email = trim($_POST['email']);
      $Contraseña = trim($_POST['Contraseña']);
      $ficha = trim($_POST['Numero_ficha']);
      $sangre = trim($_POST['Tipo_sangre']);
      $alergias = trim($_POST['alergias']);

	    $consulta = "INSERT INTO formulario(Nombre_completo, Numero_de_documento, Email, Contraseña, Numero_de_ficha, Tipo_de_sangre, alergias) VALUES ('$username','$docu','$email','$Contraseña','$ficha','$sangre','$alergias')";

	    $resultado = mysqli_query($conex,$consulta);
      
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

// TODO ESTO LO SAQUE DE https://www.youtube.com/watch?v=cka0J41iJY0 Y PUES LO MODIFIQUE EN BASE A NUETRA BASE DE DATOS OBVIAMENTE

?>
