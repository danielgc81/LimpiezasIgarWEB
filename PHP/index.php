<?php

   session_start();

   $usuarios_web = [
      "Gonzalo" => "1234",
      "Garrido" => "1234"
   ];

   $username = $_POST['username'];
   $password = $_POST['password'];

   foreach ($usuarios_web as $usuario => $pass) {
      if ($username == $usuario && $password == $pass) {
         $_SESSION['username'] = $username;
         header("Location: ../start.php");
      }
   }

?>


