<?php
   session_start();

   $host = "localhost";
   $usuario = "root";
   $contrasena = "";
   $base_datos = "LimpiezasIgar";

   $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

   if ($conexion->connect_error) {
      echo "Conexión fallida: " . $conexion->connect_error;
   } else {
      echo "Conexión exitosa";
   }

   $nombre = $_POST['usuario'];
   $password = $_POST['contraseña'];

   $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre = ? AND contraseña = ?");
   $stmt->bind_param("ss", $nombre, $password);
   $stmt->execute();
   $resultado = $stmt->get_result();

   if ($resultado->num_rows > 0) {
      $_SESSION['username'] = $nombre;
      header("Location: ../start.php");
   } else {
      $stmt_insert = $conexion->prepare("INSERT INTO usuarios (nombre, contraseña) VALUES (?, ?)");
      $stmt_insert->bind_param("ss", $nombre, $password);
      $stmt_insert->execute();

      $_SESSION['username'] = $nombre;
      header("Location: ../start.php");
   }
?>


