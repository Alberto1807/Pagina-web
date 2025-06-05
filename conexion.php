<?php
$host = "localhost";
$usuario = "root";
$contrasena = ""; // tu contraseña aquí si tiene
$base_datos = "energias_renovables";

// Conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
  die("❌ Error de conexión: " . $conn->connect_error);
}
?>