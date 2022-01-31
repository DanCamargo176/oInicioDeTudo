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
<br>


<form action="cadastro2.php" method="post">
<table width="800" border="0" align="center">

<tr>
    <td colspan="2">Nome:<input name="nome" type="text" size="96"></td>
  </tr> 
  <tr>
  <td  colspan="2">E-mail:<input name="email" type="text" size="96"></td>
  </tr>
  <tr>
    <td colspan="2">Data de Nascimento:<input name="data_nasc" type="text" size="82"></td>
  </tr> 
  <tr>
    <td>Masculino: <input type="radio" value="masculino" checked name="sexo" size="40"><br></td>
    <td width="390">Feminino: <input type="radio" value="feminino" name="sexo" size="40"><br></td>
  </tr>
  <tr>
    <td  colspan="2">Profissão:<input name="profissao" type="text" size="93"><br></td>
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


