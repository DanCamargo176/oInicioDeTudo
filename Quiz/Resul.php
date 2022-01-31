<center><h1>Suas respostas são:</h1></center>
<HR>
<?php
if (empty($_POST['time9'])){
include 'Perg5.php';
echo "A Nona Questão está em branco. Favor preencher uma das alternativas!<br>";
}
else if (empty($_POST['time10'])){
include 'Perg5.php';
echo "A Décima questão está tem branco. Favor Preencher uma das alternativas!<br>";
}else{

$_login=$_POST['login'];
$_senha=$_POST['senha'];
$_acertos=0;
$_erros=0;
$quest1=$_POST['time1'];
if($quest1=='CFC'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest2=$_POST['time2'];
if($quest2=='ITU'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest3=$_POST['time3'];
if($quest3=='BRC'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest4=$_POST['time4'];
if($quest4=='CR7'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest5=$_POST['time5'];
if($quest5=='FLA'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest6=$_POST['time6'];
if($quest6=='COR'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest7=$_POST['time7'];
if($quest7=='RMD'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest8=$_POST['time8'];
if($quest8=='SFC'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest9=$_POST['time9'];
if($quest9=='AFH'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else
$quest10=$_POST['time10'];
if($quest10=='JMO'){
$_acertos++;	
}else{//inicio do else
$_erros++;
}//fim do else


echo "O Número de acertos é: ".$_acertos;
echo "<br>";
echo "<hr>";
echo "O Número de erros é: ".$_erros;
echo "<br>";
echo "<hr>";
/* Inicio do calculo Porcentagem! */$_porcent_acertos=(int)($_acertos*100)/ ($_acertos+$_erros);
echo "Sua porcentagem de Acertos é: ".$_porcent_acertos."%";
echo "<br>";// Fim do Calculo Porcentagem!
echo "<center><a href=Home.php><input type=submit name=voltar value=Voltar></a></center>";
}

?>