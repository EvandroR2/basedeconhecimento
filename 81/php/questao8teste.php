<!DOCTYPE html>
<html> 
<head>
	<link rel="stylesheet" type="text/css" href="css/estilofonteeimg.css">
	<meta charset="utf-8"/>
	<title> Curso em video</title>
</head>
<body>
	<input type=submit value="Texto do Botão">
	<input type=text name=nome_do_campo>
	<form action="script.php" method="post">
Campo 1: <input type=text name=campo1><br>
Campo 2: <input type=text name=campo2><br>
<input type=submit value="OK">
</form>

<form action="hidden.php" method="post">
<input type=hidden name=escondido value="valor do escondido">
<input type=hidden name=id value="111">
<input type=submit>
</form>

<form action="texts.php" method="post">
Nome: <input type=text name=nome><br>
Email: <input type=text name=email><br><br>
Mensagem: <textarea name=mensagem cols=8 rows=3></textarea><br>
<input type=submit>
</form>

<form action="radio.php" method="post">
<B>Qual seu sistema operacional?</B><br>
<input type=radio name=sistema value="Windows 98"> Win 98
<input type=radio name=sistema value="Windows XP"> Win XP
<input type=radio name=sistema value="Linux"> Linux
<input type=radio name=sistema value="Mac"> Mac
<br><br>
<B>Qual a marca de seu monitor?</B><br>
<input type=radio name=monitor value="Samsung"> Samsung
<input type=radio name=monitor value="LG"> LG
<input type=radio name=monitor value="Desconhecido"> Desconhecido
<br><br>
<input type=submit>
</form>

<form action="checkbox.php" method="post">
<B>Escolha os numeros de sua preferência:</B><br>
<input type=checkbox name="numeros[]" value=10> 10<br>
<input type=checkbox name="numeros[]" value=100> 100<br>
<input type=checkbox name="numeros[]" value=1000> 1000<br>
<input type=checkbox name="numeros[]" value=10000> 10000<br>
<input type=checkbox name="numeros[]" value=90> 90<br>
<input type=checkbox name="numeros[]" value=50> 50<br>
<input type=checkbox name="numeros[]" value=30> 30<br>
<input type=checkbox name="numeros[]" value=15> 15<br><BR>
<input type=checkbox name="news" value=1> <B>Receber
Newsletter?</B><br><BR>
<input type=submit>
</form>

<form action="select.php" method="post">
<B>Qual seu processador?</B><br>
<select name=processador>
<option value=Pentium>Pentium</option>
<option value=AMD>AMD</option>
<option value=Celeron>Celeron</option>
</select><BR><BR>
<B>Livros que deseja comprar?</B><br>
Obs: segure "CTRL" para selecionar mais de um.<BR>
<select name="livros[]" multiple>
<option value="Biblia do PHP 4">Biblia do PHP 4</option>
<option value="PHP Professional">PHP Professional</option>
<option value="Iniciando em PHP">Iniciando em PHP</option>
<option value="Novidades do PHP 5">Novidades do PHP 5</option>
<option value="Biblia do MySQL">Biblia do MySQL</option>
</select><BR><BR>
<input type=submit>
</form>
<!--<?php
echo "O valor de CAMPO 1 é: " . $_POST["campo1"];
echo "<br>O valor de CAMPO 2 é: " . $_POST["campo2"];
?>
<?php
import_request_variables("gP");
?>
<?php
echo "Campo Hidden: " . $_POST["escondido"];
echo "<br>Oi, seu ID é: " . $_POST["id"];
?>
<?php
echo "Olá " . $_POST["nome"] . " (email: " . $_POST["email"] . ")<br><br>";
echo "Sua mensagem: " . $_POST["mensagem"];
?>
<?php
echo "Seu sistema operacional é: " . $_POST["sistema"];
echo "<br>Seu monitor é: " . $_POST["monitor"];
?>
<?php
// Verifica se usuário escolheu algum número
if(isset($_POST["numeros"]))
{
    echo "Os números de sua preferência são:<BR>";

    // Faz loop pelo array dos numeros
    foreach($_POST["numeros"] as $numero)
    {
        echo "- " . $numero . "<BR>";
    }
}
else
{
    echo "Você não escolheu número preferido!<br>";
}

// Verifica se usuário quer receber newsletter
if(isset($_POST["news"]))
{
    echo "Você deseja receber as novidades por email!";
}
else
{
    echo "Você não quer receber novidades por email...";
}
?>
<?php
echo "Seu processador é: " . $_POST["processador"] . "<BR>";

// Verifica se usuário escolheu algum livro
if(isset($_POST["livros"]))
{
    echo "O(s) livro(s) que você deseja comprar:<br>";
    // Faz loop para os livros
    foreach($_POST["livros"] as $livro)
    {
        echo "- " . $livro . "<br>";
    }
}
else
{
    echo "Você não escolheu nenhum livro!";
}
?>
-->

</body>
</html>