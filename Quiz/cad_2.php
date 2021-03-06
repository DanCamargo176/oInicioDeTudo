<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Usuário</title>


<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
<link href="css/SpryValidationSelect.css" rel="stylesheet" type="text/css"/>
<link href="css/SpryValidationPassword.css" rel="stylesheet" type="text/css"/>
<link href="css/SpryValidationConfirm.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="css/estilo.css" type="text/css" />

</head>

<body>
<div class="formulario">
<center><font face="Comic Sans MS, cursive"><h1> Cadastro de Usuário<h2/></h1></font></center>

<form name="cadastro_quiz" action="" method="post">

<div class="formulario-texto">Nome:</div>
<div class="formulario-campo">
<span id="sprytextfield1">
 <input type="text" name="nome" class="textfield-nome"/>
 <br/><span class="textfieldRequiredMsg"> Digite seu nome</span>
<span class="textfieldMinCharsMsg">Mínimo de 7 caracters para validar o usuário</span></span></div>

 
<div class="formulario-texto">E-mail:</div>
<div class="formulario-campo">
<span id="sprytextfield2"> 
<input type="text" name="email" class="textfield-nome"/>
<br/><span class="textfieldRequiredMsg"> Digite seu e-mail</span> 
<span class="textfieldInvalidFormatMsg"> Formato de e-mail inválido</span></span></div>


<div class="formulario-texto">Usuário:</div>
<div class="formulario-campo">
<span id="sprytextfield3"> 
<input type="text" name="novousuario" class="textfield-nome"/>
<br/><span class="textfieldRequiredMsg"> Digite  o nome do Usuário</span>
<span class="textfieldMinCharsMsg">Mínimo de 5 caracters para validar o usuário</span></span></div>
 
 

<div class="formulario-texto">Senha:</div>
<div class="formulario-campo">
<span id="sprypassword1"> 
<input type="password" name="novasenha" class="textfield-nome"/>
<br/><span class="passwordRequiredMsg">Digite  a senha</span>
<span class="passwordMinCharsMsg">Mínimo de 6 caracters para validar a senha</span></span></div>
 
 
<div class="formulario-texto">Confirmar Senha:</div>
<div class="formulario-campo">
<span id="spryconf1"> 
<input type="password" name="confsenha" class="textfield-nome" />
<br/><span class="confirmRequiredMsg">Digite a senha novamente</span>
<span class="confirmInvalidMsg">Senhas não conferem</span></span></div> 
<center>
<br /><br />


<input name="Limpar" type="reset" value="Limpar" class="btn-contato-reset" />
<input name="enviar" type="submit" value="Enviar" class="btn-contato-enviar" />
<input name="oculto" type="hidden" value="oculto"/>


</center>
</form>
</div>


<script type="text/javascript"  src="js/SpryValidationTextField.js" language="javascript" ></script>
<script type="text/javascript"  src="js/SpryValidationPassword.js"  language="javascript" ></script>
<script type="text/javascript"  src="js/SpryValidationConfirm.js"   language="javascript" ></script>
<script type="text/javascript"  src="js/SpryValidationSelect.js"    language="javascript" ></script>


<script type="text/ecmascript">

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1","none",{minChars:7, maxChars:50, validateOn:['change']});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2","email",{validateOn:['change']});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3","none",{minChars:5, maxChars:30, validateOn:['change']});
var sprypassaword1 = new Spry.Widget.ValidationPassword("sprypassword1",{minChars:6, validateOn:['change']});
var spryconf1 = new Spry.Widget.ValidationConfirm("spryconf1","sprypassword1",{validateOn:['change']});


</script>
</body>
