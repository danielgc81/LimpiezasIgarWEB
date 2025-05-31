<?php

   $usuarios_web = [
      "Gonzalo" => "1234",
      "Garrido" => "1234"
   ];

   $username = $_POST['username'];
   $password = $_POST['password'];

   $session_correcta = false;

   foreach ($usuarios_web as $usuario => $pass) {
      if ($username == $usuario && $password == $pass) {
         $session_correcta = true;
      }
   }
?>


