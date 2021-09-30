<?php
  session_start();
  unset($_SESSION['id_usuario']); //destruindo a sessao
  header("../81/82/php/");//encaminhado para index
 ?>