<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUIZ DE PERGUNTAS</title>
</head>

<body>
<?php

if (empty($_POST['time3'])){
include 'Perg2.php';
echo "A Terceira Questão está em branco. Favor preencher uma das alternativas!<br>";
}
else if (empty($_POST['time4'])){
include 'Perg2.php';
echo "A Quarta questão está tem branco. Favor Preencher uma das alternativas!<br>";
}else{
?>
<center><h2>Responda as Perguntas de Acordo com seus conhecimentos</h2></center>
<hr>
<center>5 - Qual time lidera o topo do ranking das torcidas brasileiras?</center><br><br>
<center>


<form action="Perg4.php" method="post">
<input type="hidden" name="time1" value="<?php echo $_POST['time1']; ?>"/>
<input type="hidden" name="time2" value="<?php echo $_POST['time2']; ?>"/>
<input type="hidden" name="time3" value="<?php echo $_POST['time3']; ?>"/>
<input type="hidden" name="time4" value="<?php echo $_POST['time4']; ?>"/>
<input type="hidden" name="login" value="<?php echo $_POST['login']; ?>"/>,
<input type="hidden" name="senha" value="<?php echo $_POST['senha']; ?>"/>
<table width="800" border="0" align="center">
<tr><td width="10"><input type="radio" value="FLA" name="time5"></td><td>A- Flamengo</td></tr>
<tr><td width="10"><input type="radio" value="COR" name="time5"></td><td>B- Corinthians<br></td></tr>
<tr><td width="10"><input type="radio" value="SPO" name="time5"></td><td>C- São Paulo<br></td></tr>
<tr><td width="10"><input type="radio" value="PAL" name="time5"></td><td>D- Palmeiras<br></td></tr>
<tr><td width="10"><input type="radio" value="VCO" name="time5"></td><td>E- Vasco<br></td></tr>

</table>
<hr>

<br><br>6 -Qual time lidera o rankig de time mais rico do Brasil?<br><br>
    
<form action="" method="post">
<table width="800" border="0" align="center">
 	 	<tr><td width="10"><input type="radio" value="SPO" name="time6" size="50">A- São Paulo<br></td></tr>
        <tr><td width="10"><input type="radio" value="PAL" name="time6" size="50">B- Palmeiras</center><br></td></tr>
        <tr><td width="10"><input type="radio" value="STO" name="time6" size="50">C- Santos<br></center></td></tr>
        <tr><td width="10"><input type="radio" value="COR" name="time6" size="50">D- Corinthians<br></td></tr>
        <tr><td width="10"><input type="radio" value="INT" name="time6" size="50">E- Internacional<br></td></tr>

    </table>
<HR>
<center> <input type="submit" name="Enviar" value="Continuar"> </center>
</form>
</center>
<?php } ?>
</body>
</html>