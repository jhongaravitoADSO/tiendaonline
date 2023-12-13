<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $opinion = $_POST["opinion"];
    $calificacion = $_POST["calificacion"];
    $fechaDeCreacion = date("Y-m-d H:i:s"); 
    // 
    $servidor = "3000";
    $usuario = "root";
    $contrasena = "root";
    $basededatos = "opiniones"; 

    // 
    $conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);

    // 
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    //
    $consulta = $conexion->prepare("INSERT INTO opiniones (nombre, correo, opinion, calificacion, fecha_creacion) VALUES (?, ?, ?, ?, ?)");
    $consulta->bind_param("sssss", $nombre, $correo, $opinion, $calificacion, $fechaDeCreacion);

    // 
    if ($consulta->execute()) {
        echo "<p>Gracias por tu opinión, $nombre.</p>";
        echo "<p>Correo electrónico: $correo</p>";
        echo "<p>Opinión: $opinion</p>";
        echo "<p>Calificación: $calificacion</p>";
    } else {
        echo "Error al insertar en la base de datos: " . $conexion->error;
    }

    // 
    $conexion->close();
}
?>
