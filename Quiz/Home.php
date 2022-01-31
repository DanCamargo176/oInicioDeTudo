<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOME</title>
</head>

<body>
<center><h1> Quiz de Estudantes</h1>

<br>
<h3>-Digite seu usuário e senha abaixo e em seguida clique em Iniciar Quiz!</h3>
<br>
</center><br>
<form action="entrar.php" method="post">
<table width="800" border="0" align="center">
<tr>
  <tr>
  <tr><center>Login:<input type="text" value="" name="login" size="50"><br></center><br></tr>
    <td><center>Senha:<input type="password" value="" name="senha" size="50"><br></center><br></td>
    <td><input type="hidden" name="novousuario" value="<?php echo $_POST['novousuario']; ?>"/></td>
    <td><input type="hidden" name="novasenha" value="<?php echo $_POST['novasenha']; ?>"/></td>
    <td><input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"/></td>
    <tr>
    <td>
    </table>
    <HR>
<center> <input type="submit" name="Enviar" value="Iniciar Quiz!" > </center>
<br>
<br>
<center> <input type="button" name="novousuario" value="Novo Usuário" onClick="window.open('cad_2.htm','_self')"> </center>

</form>
</body>
</html>
