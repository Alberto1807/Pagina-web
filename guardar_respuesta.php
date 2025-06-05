<?php
// Incluir la conexión
require_once("conexion.php");

// Verificar que se recibieron todos los datos
if (isset($_POST['preg1'], $_POST['preg2'], $_POST['preg3'])) {
  $p1 = $_POST['preg1'];
  $p2 = $_POST['preg2'];
  $p3 = $_POST['preg3'];

  // Preparar la inserción
  $stmt = $conn->prepare("INSERT INTO respuestas_cuestionario (clara_informacion, gusto_diseno, aprendio_nuevo) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $p1, $p2, $p3);

  // Ejecutar y dar respuesta
  if ($stmt->execute()) {
    echo "<h2>✅ ¡Gracias por enviar tus respuestas!</h2><a href='index.html'>Volver</a>";
  } else {
    echo "❌ Error al guardar: " . $stmt->error;
  }

  $stmt->close();
} else {
  echo "⚠️ Por favor responde todas las preguntas.";
}

// Cerrar conexión
$conn->close();
?>