<?php
  session_start();
  unset($_SESSION['id_usuario']); //destruindo a sessao
  header("location: http://localhost:81/82/php/");//encaminhado para index
 ?>
