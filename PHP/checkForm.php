<?php
   $nombre = $_POST['name'];
   $apellidos = $_POST['lastname'];
   $email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Limpiezas Igar - Limpieza Top 1% Mundial</title>
   <link rel="stylesheet" href="../CSS/checkForm.css">
</head>
<body>
   <div class="greeting__message">
      <h1 class="greeting__message-title">
         ¡Gracias, <?php
         if ($apellidos == "") {
            echo $nombre;
         } else {
            echo $nombre . " " . $apellidos;
         }
         ?>!
      </h1>
      <h2 class="greeting__message-subtitle">Nuestro Servicio de Atención al cliente te responderá vía email en menos de 24 horas</h2>
      <p class="greeting__message-goBack">
         <a href="../start.php" class="greeting__message-goBackAnchor">Volver a la Página Principal</a>
      </p>
   </div>
   <div class="contact-info">
         <p class="contact-info__phone">
            <a href="tel:+34985483434" class="link">+34 985 48 34 34</a>
         </p>
         <p class="contact-info__email">
            <a href="mailto:limpiezasigar69@gmail.com" class="link">limpiezasigar69@gmail.com</a>
         </p>
      </div>
</body>
</html>
