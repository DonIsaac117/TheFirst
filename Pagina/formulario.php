<?php

session_start();

// Obtengo los datos cargados en el formulario de login.
$nombrecompleto = $_POST['username'];
$numerodedocumento = $_POST['Numero de documento'];
$Email = $_POST['email'];
$contraseña = $_POST['Contrasena'];
$ficha = $_POST['Numero de ficha'];
$tipodesangre = $_POST['Tipo de sangre'];
$nombrecompleto = $_POST['alergias'];

// Datos para conectar a la base de datos.
$nombreServidor = "localhost";
$nombreUsuario = "root";
$passwordBaseDeDatos = "";
$nombreBaseDeDatos = "easygenz";

// Crear conexión con la base de datos.
$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);

// Validar la conexión de base de datos.
if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
}

// Consulta segura para evitar inyecciones SQL.



// Verificando si el usuario existe en la base de datos.
if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['ncc'] = $documento;
    
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php"); 
}else{
    echo 'El documento o contraseña es incorrecto, <a href="formulario.html">vuelva a intenarlo</a>.<br/>';
}

?>