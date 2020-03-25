<?php
/* 
 *
*/
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Teste de Integração Agendor</title>
</head>
<body>

	<form action="./test.php" method="post">

		<div class="form-group">
		    <label for="name">Nome:</label>
		    <input type="text" size="35" name="name" placeholder="Seu nome">
		</div>

		<div class="form-group">
		    <label for="name">E-mail:</label>
		    <input type="email" size="35" name="email" placeholder="Seu e-mail">
		</div>  
		<div class="form-group">
		    <label for="name">Telefone:</label>
	 		<input type="text" size="35" maxlength="15" minlength="14" name="phone" placeholder="(xx) xxxx-xxxx"> 
		</div> 

		<div class="form-group">
			<input type="submit" name="BTEnvia" value="Enviar"> 
		</div> 

	</form>
</body>
</html>