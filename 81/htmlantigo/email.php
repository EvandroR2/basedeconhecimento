<?php
	
	if(isset($_POST['email']) && !empty($_POST['email'])){

	$name = addcslashes ($_POST['name']);
	$email = addcslashes ($_POST['email']);
	$mensagem = addcslashes ($_POST['message']);

	$to = "contato@meajudavandin.com" ;
	$subject = " Contato - Formulario" ;
	$body = "Nome: ".$name. "\r\n"."Email:".$email."\r\n"."Mensagem:".$message."\r\n";
	$header = "from:contato@meajudavandin.com"."\r\n"."Reply-to:".$email."\r\n"."X-Mailer:PHP/".phpversion();

	if(mail($to,$subject,$body,$header)) {
		echo ("Email Enviado com Sucesso");
	}
	else {
		echo ("O Email não foi enviado.");
	}
}


?>