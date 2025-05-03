<?php
$host = "sql202.infinityfree.com";
$usuario = "if0_38894905";
$contrasena = "UgyJrvvCVuRTcjN";
$base_datos = "if0_38894905_empresas"; 

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nit = $_POST['nit'];
$empresa = $_POST['empresa'];
$representante = $_POST['representante'];
$categoria = $_POST['categoria'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

// Insertar en la base de datos
$sql = "INSERT INTO personas (nit, empresa, representante, categoria, telefono, correo, direccion)
        VALUES ('$nit', '$empresa', '$representante', '$categoria', '$telefono', '$correo', '$direccion')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro guardado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
