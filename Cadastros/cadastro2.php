<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Usuários</title>
</head>
<body>
<h1><center> Cadastro de Usuário </h1><hr>
<br>
<br>
<body background="suzuki-moto_00310424.jpg">


<form action="cadastro3.php" method="post">

 <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"/>
 <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"/>
 <input type="hidden" name="data_nasc" value="<?php echo $_POST['data_nasc']; ?>"/>
 <input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>"/>
 <input type="hidden" name="profissao" value="<?php echo $_POST['profissao']; ?>"/>
 

<table width="800" border="0" align="center">

<tr>
    <td colspan="2">Telefone:<input name="telefone" type="text" size="96"></td>
  </tr> 
  <tr>
  <td  colspan="2">Endereço:<input name="endereco" type="text" size="95"></td>
  </tr>
  <tr>
    <td colspan="2">Cidade:<input name="cidade" type="text" size="97"></td>
  </tr> 
  <tr>
    <td  colspan="2">CEP:<input name="cep" type="text" size="100"><br></td>
  </tr>
</table>
<br>
<br>
<center> <input type="submit" name="Enviar" value="Continuar"> </center>
</form>


<?php //Inicio do .PHP

?>
<hr>
</body>
</html>
