<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessão</title>

	<?php 
       date_default_timezone_set("America/Sao_Paulo");

	session_start();	

	$_SESSION["nome"] = $_POST["nome"];
	$_SESSION["senha"] = $_POST["senha"];

	 ?>
</head>
<body>
<b>Funcionário: </b> <?php echo $_SESSION["nome"] ?>, logado com sucesso. </br>

<b>Data de conexão: </b> <?php echo date("d/m/y") ?> </br>

<b>Hora de conexão: </b> <?php echo date("H:i:s") ?> </br>

<a href= "sessoes_verifica_sessao.php">Área de administrador</a>

</body>
</html>