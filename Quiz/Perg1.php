<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUIZ DE PERGUNTAS</title>
</head>

<body>
<?php
$nome=$_COOKIE['nome'];
echo "Seja Bem Vindo(a), ".$nome;
?>

<center><h2>Responda as Perguntas de Acordo com seus conhecimentos</h2></center>
<hr>
<center>1 - Quem foi o Campeão Paulista no ano de 2003?</center><br>

<form action="Perg2.php" method="post">
<input type="hidden" name="login" value="<?php echo $_POST['login']; ?>"/>,
<input type="hidden" name="senha" value="<?php echo $_POST['senha']; ?>"/>

<table width="800" border="0" align="center">
<tr><td width="10"><input type="radio" value="PAL" name="time1" size="50">A- Palmeiras<br>
<tr><td width="10"><input type="radio" value="SPO" name="time1" size="50">B- Sao Paulo</center><br></td>
<tr><td width="10"><input type="radio" value="SCT" name="time1" size="50">C- Sao Caetano<br></center></td>
<tr><td width="10"><input type="radio" value="CFC" name="time1" size="50">D- Corinthians<br></td>
<tr><td width="10"><input type="radio" value="STO" name="time1" size="50">E- Santos<br></td>

</table>
<hr>

<br><center>2 - Quem foi o Campeão Paulista no ano de 2014?</center><br><br>
<form action="" method="post">
<table width="800" border="0" align="center">
<tr><td width="10"><input type="radio" value="PAL" name="time2">A- Vasco<br>
<tr><td width="10"><input type="radio" value="SPO" name="time2">B- Sao Paulo</center><br></td>
<tr><td width="10"><input type="radio" value="ITU" name="time2">C- Itauno<br></center></td>
<tr><td width="10"><input type="radio" value="CFC" name="time2">D- Corinthians<br></td>
<tr><td width="10"><input type="radio" value="CUM" name="time2">E- Criciúma<br></td>

    </table>
    <HR>
<center> <input type="submit" name="Enviar" value="Continuar"> </center>
</form>

</body>
</html>
