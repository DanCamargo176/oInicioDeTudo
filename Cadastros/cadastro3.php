<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br"
<head>
<meta charset= "utf-8"
<title><h1><center> Cadastro de Usuário </h1><hr></title>
</head>
<body>

<br>
<br>
<body background="rappel-pneu-continental.jpg">
<form action="" method="post">

 <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"/>
 <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"/>
 <input type="hidden" name="data_nasc" value="<?php echo $_POST['data_nasc']; ?>"/>
 <input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>"/>
 <input type="hidden" name="profissao" value="<?php echo $_POST['profissao']; ?>"/>
 <input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>"/>
 <input type="hidden" name="endereco" value="<?php echo $_POST['endereco']; ?>"/>
 <input type="hidden" name="cidade" value="<?php echo $_POST['cidade']; ?>"/>
 <input type="hidden" name="cep" value="<?php echo $_POST['cep']; ?>"/>

<table width="800" border="0" align="center">
<tr>
    <td colspan="2">Login:<input name="login" type="text" size="96"></td>
  </tr> 
  <tr>
  <td  colspan="2">Senha:<input name="senha" type="password" size="96"></td>
  </tr>
  <tr>
    <td colspan="2">Confirmar Senha:<input name="confirm_senha" type="password" size="85"></td>
  </tr> 
  </table>
<br>
<br>
  <center> <input type="submit" name="Enviar" value="Finalizar">
</form>


<?php //Inicio do .PHP

?>
<hr>
</body>
</html>