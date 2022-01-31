<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUIZ DE PERGUNTAS</title>
</head>

<body>
<?php

if (empty($_POST['time1'])){
include 'Perg1.php';
echo "A Primeira Questão está em branco. Favor preencher uma das alternativas!<br>";
}
else if (empty($_POST['time2'])){
include 'Perg1.php';
echo "A Segunda questão está tem branco. Favor Preencher uma das alternativas!<br>";
}else{
?>
<center><h2>Responda as Perguntas de Acordo com seus conhecimentos</h2></center>
<hr>
<center>3 - Qual time ganhou a Liga dos Campeoes da Europa na Temporada 2014/2015?</center><br><br>
<center>



<form action="Perg3.php" method="post">
<input type="hidden" name="time1" value="<?php echo $_POST['time1']; ?>"/>
<input type="hidden" name="time2" value="<?php echo $_POST['time2']; ?>"/>
<input type="hidden" name="login" value="<?php echo $_POST['login']; ?>"/>,
<input type="hidden" name="senha" value="<?php echo $_POST['senha']; ?>"/>
<table width="800" border="0" align="center">
<tr><td width="10"><input type="radio" value="BRC" name="time3"></td><td>A- Barcelona</td></tr>
<tr><td width="10"><input type="radio" value="RMD" name="time3"></td><td>B- Real Madrid<br></td></tr>
<tr><td width="10"><input type="radio" value="MCU" name="time3"></td><td>C- Manchester United<br></td></tr>
<tr><td width="10"><input type="radio" value="BRD" name="time3"></td><td>D- Borussia Dortmund<br></td></tr>
<tr><td width="10"><input type="radio" value="PSG" name="time3"></td><td>E- Paris Saint Germain<br></td></tr>

</table>
<hr>

<br><br>4 - Quem foi considerado o Melhor Jogador do ano de 2014?<br><br>

<form action="" method="post">
<table width="800" border="0" align="center">
 	 	<tr><td width="10"><input type="radio" value="M10" name="time4" size="50">A- Messi<br></td></tr>
        <tr><td width="10"><input type="radio" value="CR7" name="time4" size="50">B- Cristiano Ronaldo</center><br></td></tr>
        <tr><td width="10"><input type="radio" value="RON" name="time4" size="50">C- Wayne Rooney<br></center></td></tr>
        <tr><td width="10"><input type="radio" value="MRS" name="time4" size="50">D- Marco Reus<br></td></tr>
        <tr><td width="10"><input type="radio" value="IBR" name="time4" size="50">E- Zlatan Ibrahimovic<br></td></tr>

    </table>
<HR>
<center> <input type="submit" name="Enviar" value="Continuar"> </center>
</form>
</center>
<?php } ?>
</body>
</html>
