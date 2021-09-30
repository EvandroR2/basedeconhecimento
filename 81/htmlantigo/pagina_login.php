<?php
session_start();
?>

<html>
  <head>
  <title>LOGIN</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilologin.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  <script src="js/login.js"></script>
  </head>
<body>
  <div class="login-page">
  <div class="form">
  	<?php
  	if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div>
	<p>ERRO: Usuário ou senha inválidos.</p>
    </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <form class="login-form" action="email_conect.php" method="POST">
      <input type="text" placeholder="Nome"  name="usuario"/>
      <input type="password" placeholder="Senha"  name="senha"/>
      <button type="submit" name="btn-entrar">ENTRAR</button>
      <p class="message">Not registered? <a href="videoaula.php">Create an account</a></p>
      <?php
	if (!empty($erros)):
		foreach ($erros as $erro):
		echo $erro;
		endforeach;
	endif;
	?>
    </form>
  </div>
  </div>
</body>
	