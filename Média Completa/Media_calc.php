<html
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Média - Daniel Camargo</title>
</head>
<body>
<?php
include 'form_media.php';

//valores da media

$vl1= $_POST['vl1'];
if ($vl1>10 || $vl1<0){
	echo "<center><br> Nota 1: Favor inserir um valor de 0 a 10</center>";
}
else{	
$vl2= $_POST['vl2'];
if ($vl2>10 || $vl2<0){
	echo "<center><br> Nota 2: Favor inserir um valor de 0 a 10</center>";
} else{
$vl3= $_POST['vl3'];
if ($vl3>10 || $vl3<0){
	echo "<center><br> Nota 3: Favor inserir um valor de 0 a 10</center>";
} else{
$vl4= $_POST['vl4'];
if ($vl4>10 || $vl4<0){
	echo "<center><br> Nota 4: Favor inserir um valor de 0 a 10</center>";
}
else{

$media=($vl1+$vl2+$vl3+$vl4)/4;
$media=number_format($media, '2', '.', '');

if ($media>=7)
{//inicio do if
echo "<center> <br> Média:<input name=media type=text value=" .$media."> <br> </center> <hr>";
echo "<center> <br> Situação:<input name=situacao type=text value= Aprovado> <br> </center>  <hr>";
}//fim do if

if ($media<7 && $media>5)
{//inicio do if
echo "<center> <br> Média:<input name=media type=text value=" .$media."> <br> </center> <hr>";
echo "<center> <br> Situação: <input name=situacao type=text value= Recuperação> <br> </center> <hr>";
}//fim do if

if ($media<=5)
{//inicio do if
echo "<center> <br> Média:<input name=media type=text value=" .$media."> <br> </center> <hr>";
echo "<center> <br> Situação: <input name=situacao type=text value= Reprovado> <br> </center> <hr>";
}//fim do if
}//fim do $n4
}//fim do $n3
}// fim do $n2
}//fim do else $n1
?>
</body>

</html>