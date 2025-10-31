<?php
$servidor = "localhost";  
$usuario = "root";        //usuario de acceso
$clave = "";              // sin contrasña
$base_datos = "formulario"; // nombre de la base de datos

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$peticion = $_POST['peticion'];

$sql = "INSERT INTO usuarios (nombre, telefono, correo, peticion) VALUES ('$nombre', '$correo', '$telefono', '$peticion')";
if (mysqli_query($conexion, $sql)) {
    header("Location: fin.html");
} else {
    echo "❌ Error al guardar: " . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);

?>
