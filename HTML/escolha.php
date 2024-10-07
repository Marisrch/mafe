<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Escolha a fruta</title>
</head>
<body>
<h1> Escolha sua fruta</h1>

<form action="recebe_usuario.php" method="post">

   <ol>
	<li>  Banana </li>
	<li>  Abacaxi </li>
	<li>  Morango</li>
	<li>  Maracujá</li>
	<li>  Pera </li>
</ol>

	

    	<label for="nome">Escolha sua fruta</label>
    	<input type="number" name="num" id="num">
    	<br>
    	<input type="submit" name="enviar" value="enviar">
    
    	<input type="reset" name="limpar" value="limpar">
	
</form>




</body>
</html>