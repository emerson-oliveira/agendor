<?php
/* 
 *
*/
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Teste de Integração Agendor</title>

	<script type="text/javascript">
        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            
            v=v.replace(/\D/g,"");             
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); 
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");    
            return v;
        }
        function id( el ){
            return document.getElementById( el );
        }
        window.onload = function(){
            id('phone').setAttribute('maxlength',15);
            id('phone').onkeypress =
            function(){
                mascara( this, mtel );
            }
        }
	</script>
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
	 		<input type="text" id="phone" size="35" maxlength="15" minlength="14" name="phone" placeholder="(xx) xxxx-xxxx"> 
		</div> 

		<div class="form-group">
			<input type="submit" name="BTEnvia" value="Enviar"> 
		</div> 

	</form>
</body>
</html>