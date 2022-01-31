<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUIZ DE PERGUNTAS</title>
</head>

<body>
<?php

if (empty($_POST['time5'])){
include 'Perg3.php';
echo "A quinta Questão está em branco. Favor preencher uma das alternativas!<br>";
}
else if (empty($_POST['time6'])){
include 'Perg3.php';
echo "A sexta questão está tem branco. Favor Preencher uma das alternativas!<br>";
}else{
?>
<center><h2>Responda as Perguntas de Acordo com seus conhecimentos</h2></center>
<hr>
<center>7 - Qual é o time mais rico do mundo na atualidade?</center><br><br>
<center>

<form action="Perg5.php" method="post">
<input type="hidden" name="time1" value="<?php echo $_POST['time1']; ?>"/>
<input type="hidden" name="time2" value="<?php echo $_POST['time2']; ?>"/>
<input type="hidden" name="time3" value="<?php echo $_POST['time3']; ?>"/>
<input type="hidden" name="time4" value="<?php echo $_POST['time4']; ?>"/>
<input type="hidden" name="time5" value="<?php echo $_POST['time5']; ?>"/>
<input type="hidden" name="time6" value="<?php echo $_POST['time6']; ?>"/>
<input type="hidden" name="login" value="<?php echo $_POST['login']; ?>"/>,
<input type="hidden" name="senha" value="<?php echo $_POST['senha']; ?>"/>
<table width="800" border="0" align="center">
<tr><td width="10"><input type="radio" value="BRC" name="time7"></td><td>A- Barcelona</td></tr>
<tr><td width="10"><input type="radio" value="RMD" name="time7"></td><td>B- Real Madrid<br></td></tr>
<tr><td width="10"><input type="radio" value="MCU" name="time7"></td><td>C- Manchester United<br></td></tr>
<tr><td width="10"><input type="radio" value="BRD" name="time7"></td><td>D- Borussia Dortmund<br></td></tr>
<tr><td width="10"><input type="radio" value="PSG" name="time7"></td><td>E- Paris Saint Germain<br></td></tr>

</table>
<hr>

<br><br>8 - Qual o time mais velho do mundo?<br><br>
    
<form action="" method="post">
<table width="800" border="0" align="center">
 	 	<tr><td width="10"><input type="radio" value="SFC" name="time8" size="50">A- Sheffield Football Club<br></td></tr>
        <tr><td width="10"><input type="radio" value="NFC" name="time8" size="50">B- Notts County Football Club</center><br></td></tr>
        <tr><td width="10"><input type="radio" value="RFC" name="time8" size="50">C- Rangers Football Club<br></center></td></tr>
        <tr><td width="10"><input type="radio" value="AVF" name="time8" size="50">D- Aston Villa Football Club<br></td></tr>
        <tr><td width="10"><input type="radio" value="EFC" name="time8" size="50">E- Everton Football Club<br></td></tr>

    </table>
<HR>
<center> <input type="submit" name="Enviar" value="Continuar"> </center>
</form>
</center>
<?php } ?>
</body>
</html>