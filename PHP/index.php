<?php

<<<<<<< HEAD
=======
   session_start();

>>>>>>> 67bef0acd300374e5f68654ef54bb965a1b1d3bb
   $usuarios_web = [
      "Gonzalo" => "1234",
      "Garrido" => "1234"
   ];

   $username = $_POST['username'];
   $password = $_POST['password'];

<<<<<<< HEAD
   $session_correcta = false;

   foreach ($usuarios_web as $usuario => $pass) {
      if ($username == $usuario && $password == $pass) {
         $session_correcta = true;
      }
   }
=======
   foreach ($usuarios_web as $usuario => $pass) {
      if ($username == $usuario && $password == $pass) {
         $_SESSION['username'] = $username;
         header("Location: ../start.php");
      }
   }

>>>>>>> 67bef0acd300374e5f68654ef54bb965a1b1d3bb
?>


