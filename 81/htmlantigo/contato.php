<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
  <title>PDVNET - CONTATO</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilonovo.css" />
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  <script src="js/TREINO01.js"></script>
  </head>
  <body>
    <div class="principal">
      <header>
        <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="ajuda.php">AJUDA</a></li>
          <li><a href="instaladores.php">INSTALADORES</a></li>
          <li><a href="videoaula.php">VIDEOS</a></li>
          <li><a href="contato.php">CONTATO</a></li>
        </ul>
        </nav>
      <section class="fundopdv">
        <div class="linha">
        <h1>Fale conosco</h1>
        <h3 class="titulo"> Para dúvidas, sugestões, críticas, elogios ou outras informações,</br><br>
        entre em contato conosco pelo e-mail:</br><br>
        contato@meajudavandin.com</h3><br><br>
        <div class="msgenvio">
          <form method="POST" action="./email.php">
          <div>
          <div>
          <input name="name" id="name" placeholder="Name" type="text">
          </div>
          <br><br><br><br>
          <div>
          <input name="email" id="email" placeholder="Email" type="email">
          </div>
          <br><br><br>
          <div>.\
          <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
          </div>
          <br><br><br>
          <div>
          <ul class="actions">
          <li><input value="ENVIAR" class="special big" type="submit"></li>
          </ul>
          </div>
          </div>
          </form>
        </div>
      </section>
      </header>
      <footer class="rodape">
<p>Copyright &copy; 2020 - by Evandro Edgariano</br> <a href="https://www.facebook.com/sk8chacal" target="_blank">Facebook</a> | <a href="https://www.instagram.com/edgarianor2/?hl=pt-br">Instagram</a> </p>
  </footer> 
    </div>
  </body>
</html>

