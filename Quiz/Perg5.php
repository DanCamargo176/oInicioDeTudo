<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUIZ DE PERGUNTAS</title>
</head>

<body>
<?php

if (empty($_POST['time7'])){
include 'Perg4.php';
echo "A Sétima Questão está em branco. Favor preencher uma das alternativas!<br>";
}
else if (empty($_POST['time8'])){
include 'Perg4.php';
echo "A Oitava questão está tem branco. Favor Preencher uma das alternativas!<br>";
}else{
?>
<center><h2>Responda as Perguntas de Acordo com seus conhecimentos</h2></center>
<hr>
<center>9 - Qual é o maior goleador de todos os tempos?</center><br><br>
<center>

<form action="Resul.php" method="post">
<input type="hidden" name="time1" value="<?php echo $_POST['time1']; ?>"/>
<input type="hidden" name="time2" value="<?php echo $_POST['time2']; ?>"/>
<input type="hidden" name="time3" value="<?php echo $_POST['time3']; ?>"/>
<input type="hidden" name="time4" value="<?php echo $_POST['time4']; ?>"/>
<input type="hidden" name="time5" value="<?php echo $_POST['time5']; ?>"/>
<input type="hidden" name="time6" value="<?php echo $_POST['time6']; ?>"/>
<input type="hidden" name="time7" value="<?php echo $_POST['time7']; ?>"/>
<input type="hidden" name="time8" value="<?php echo $_POST['time8']; ?>"/>
<input type="hidden" name="login" value="<?php echo $_POST['login']; ?>"/>,
<input type="hidden" name="senha" value="<?php echo $_POST['senha']; ?>"/>
<table width="800" border="0" align="center">
<tr><td width="10"><input type="radio" value="REI" name="time9"></td><td>A- Pelé</td></tr>
<tr><td width="10"><input type="radio" value="AFH" name="time9"></td><td>B- Arthur Friedenreich<br></td></tr>
<tr><td width="10"><input type="radio" value="TMA" name="time9"></td><td>C- Túlio Maravilha<br></td></tr>
<tr><td width="10"><input type="radio" value="RMO" name="time9"></td><td>D- Romário<br></td></tr>
<tr><td width="10"><input type="radio" value="ZCO" name="time9"></td><td>E- Zico<br></td></tr>

</table>
<hr>

<br><br>10 - Quem é o técnico mais bem pago do mundo?<br><br>
    
<form action="" method="post">
<table width="800" border="0" align="center">
 	 	<tr><td width="10"><input type="radio" value="CAI" name="time10" size="50">A- Carlo Ancelotti(técnico do Real Madrid)<br></td></tr>
        <tr><td width="10"><input type="radio" value="PEP" name="time10" size="50">B- Pep Guardiola(técnico do Bayern de Munique)</center><br></td></tr>
        <tr><td width="10"><input type="radio" value="JMO" name="time10" size="50">C- José Mourinho(técnico do Chelsea)<br></center></td></tr>
        <tr><td width="10"><input type="radio" value="FCO" name="time10" size="50">D- Fabio Capello(técnico da seleção russa)<br></td></tr>
        <tr><td width="10"><input type="radio" value="MRO" name="time10" size="50">E- Muricy Ramalho(técnico do São Paulo)<br></td></tr>

    </table>
<HR>
<center> <input type="submit" name="Enviar" value="Continuar"> </center>
</form>
</center>
<?php } ?>
</body>
</html>