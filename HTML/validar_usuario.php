<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar usuario</title>
</head>
<body>

<h1>Validar usuario</h1>
    <form action="recebe_usuario.php" method="post">
    	
    	<label for="email">Enviar:</label>
    	<input type="email" name="email" id="email">
    	<br><br>
    	<label for="senha">Senha:</label>
    	<input type="password" name="senha" id="senha">
    	<br>
    	<br>
    	<input type="submit" name="enviar" value="enviar">
    
    	<input type="reset" name="limpar" value="limpar">
    </form>
</body>
</html>